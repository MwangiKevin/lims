<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
* @author Maestro
*/
class ajax extends MY_Controller {


	/**
	* @job =  Constructor
	*/
	function __construct() {
		parent::__construct();
	}

	public function get_facility_details($id =null){

		$fac 	=	R::getAll("SELECT * FROM `v_facility_details` WHERE `facility_id` = '$id'");
		if(sizeof($fac)>0){
			echo json_encode($fac[0]);
		}
	}

	public function get_requisition_details_json(){

		if ($this -> session -> userdata("id")) {

			$aColumns = array('drug');
			$iDisplayStart = $this -> input -> get_post('iDisplayStart', true);
			$iDisplayLength = $this -> input -> get_post('iDisplayLength', true);
			$iSortCol_0 = $this -> input -> get_post('iSortCol_0', false);
			$iSortingCols = $this -> input -> get_post('iSortingCols', true);
			$sSearch = $this -> input -> get_post('sSearch', true);
			$sEcho = $this -> input -> get_post('sEcho', true);

			$req 	=	R::getAll("SELECT * FROM `v_requisition_details` ");

			$data 	=	array();
			$recordsTotal =0;
			
			foreach ($req as $key => $value) {
				$data[] = 	array(

					(int)$value["requisition_number"],
					$value["facility_name"],
					$value["date_received"],
					$value["date_entered"],
					"0",
					$value["total"],
					$value["rejected"],
					$value["with_results"],
					$value["total"]-$value["with_results"],
					"N/A",
					$value["entered_by"],
					'<button id="remove" class="btn btn-xs btn-primary" href="dd" onclick="">
					<i class="ace-icon fa fa-trash-o bigger-120"></i>
					</button>'

					);
				$recordsTotal++;
			}
			$json_req 	=	array(
				"sEcho"						=> 1,
				"iTotalRecords"				=>$recordsTotal,
				"iTotalDisplayRecords"		=>$recordsTotal,
				"aaData"					=>$data
				);

			echo json_encode($json_req);
		}

	}

	public function getMoreHelp($stock_type = '2', $start_date = '', $end_date = '') {
		//Check if user is logged in
		if ($this -> session -> userdata("user_id")) {

			/* Server side start */
			$data = array();
			$aColumns = array('drug');
			$iDisplayStart = $this -> input -> get_post('iDisplayStart', true);
			$iDisplayLength = $this -> input -> get_post('iDisplayLength', true);
			$iSortCol_0 = $this -> input -> get_post('iSortCol_0', false);
			$iSortingCols = $this -> input -> get_post('iSortingCols', true);
			$sSearch = $this -> input -> get_post('sSearch', true);
			$sEcho = $this -> input -> get_post('sEcho', true);

			// Paging
			if (isset($iDisplayStart) && $iDisplayLength != '-1') {
				$this -> db -> limit($this -> db -> escape_str($iDisplayLength), $this -> db -> escape_str($iDisplayStart));
			}

			// Ordering
			if (isset($iSortCol_0)) {
				for ($i = 0; $i < intval($iSortingCols); $i++) {
					$iSortCol = $this -> input -> get_post('iSortCol_' . $i, true);
					$bSortable = $this -> input -> get_post('bSortable_' . intval($iSortCol), true);
					$sSortDir = $this -> input -> get_post('sSortDir_' . $i, true);

					if ($bSortable == 'true') {
						$this -> db -> order_by($aColumns[intval($this -> db -> escape_str($iSortCol))], $this -> db -> escape_str($sSortDir));
					}
				}
			}
			/*
			 * Filtering
			 * NOTE this does not match the built-in DataTables filtering which does it
			 * word by word on any field. It's possible to do here, but concerned about efficiency
			 * on very large tables, and MySQL's regex functionality is very limited
			 */
			if (isset($sSearch) && !empty($sSearch)) {
				for ($i = 0; $i < count($aColumns); $i++) {
					$bSearchable = $this -> input -> get_post('bSearchable_' . $i, true);
					// Individual column filtering
					if (isset($bSearchable) && $bSearchable == 'true') {
						$this -> db -> or_like($aColumns[$i], $this -> db -> escape_like_str($sSearch));
					}
				}
			}

			/*
			 * Outer Loop through all active drugs
			 */
			if ($stock_type == 1) {
				//Main Store
				$first_value = "AND source != destination";
				$second_value = "AND dst.source != dst.destination";
			} else if ($stock_type == 2) {
				//Pharmacy
				$first_value = "AND source=destination";
				$second_value = "AND dst.source=dst.destination";
			}
			// Select Data
			$this -> db -> select('SQL_CALC_FOUND_ROWS ' . str_replace(' , ', ' ', implode(', ', $aColumns)), false);
			$this -> db -> select("dc.id,dc.pack_size,u.name");
			$today = date('Y-m-d');
			$this -> db -> from("drugcode dc");
			$this -> db -> join("drug_unit u", "u.id=dc.unit", 'left outer');
			$this -> db -> where("dc.Enabled", 1);
			$rResult = $this -> db -> get();

			// Data set length after filtering
			$this -> db -> select('FOUND_ROWS() AS found_rows');
			$iFilteredTotal = $this -> db -> get() -> row() -> found_rows;

			// Total data set length
			$this -> db -> select("dc.*");
			$this -> db -> from("drugcode dc");
			$this -> db -> join("drug_unit u", "u.id=dc.unit", 'left outer');
			$this -> db -> where("dc.Enabled", 1);
			$tot_drugs = $this -> db -> get();
			$iTotal = count($tot_drugs -> result_array());

			$prev_start = date("Y-m-d", strtotime("-1 month", strtotime($start_date)));
			$prev_end = date("Y-m-d", strtotime("-1 month", strtotime($end_date)));

			// Output
			$output = array('sEcho' => intval($sEcho), 'iTotalRecords' => $iTotal, 'iTotalDisplayRecords' => $iFilteredTotal, 'aaData' => array());
			foreach ($rResult->result_array() as $aRow) {
				$row = array();
				$drug_id = $aRow['id'];
				$row[] = $aRow['drug'];

				//Start of Beginning Balance
				$sql = "SELECT SUM( dst.balance ) AS total FROM drug_stock_movement dst, (SELECT drug, batch_number, MAX( transaction_date ) AS trans_date FROM  `drug_stock_movement` WHERE transaction_date BETWEEN  '$prev_start' AND  '$prev_end' AND drug ='$drug_id' $first_value GROUP BY batch_number) AS temp WHERE dst.drug = temp.drug AND dst.batch_number = temp.batch_number AND dst.transaction_date = temp.trans_date $second_value";
				$query = $this -> db -> query($sql);
				$results = $query -> result_array();
				if ($results) {
					if ($results[0]['total'] != null) {
						$row[] = $results[0]['total'];
					} else {
						$row[] = 0;
					}
				} else {
					$row[] = 0;
				}

				//End of Beginning Balance
				//Start of Other Transactions
				$start_date = date('Y-m-d', strtotime($start_date));
				$end_date = date('Y-m-d', strtotime($end_date));
				$sql = "SELECT trans.name, trans.id, trans.effect, dsm.in_total, dsm.out_total FROM (SELECT id, name, effect FROM transaction_type WHERE name LIKE  '%received%' OR name LIKE  '%adjustment%' OR name LIKE  '%return%' OR name LIKE  '%dispense%' OR name LIKE  '%issue%' OR name LIKE  '%loss%' OR name LIKE  '%ajustment%' OR name LIKE  '%physical%count%' OR name LIKE  '%starting%stock%') AS trans LEFT JOIN (SELECT transaction_type, SUM( quantity ) AS in_total, SUM( quantity_out ) AS out_total FROM drug_stock_movement WHERE transaction_date BETWEEN  '$start_date' AND  '$end_date' AND drug =  '$drug_id' $first_value GROUP BY transaction_type) AS dsm ON trans.id = dsm.transaction_type GROUP BY trans.name";
				$query = $this -> db -> query($sql);
				$results = $query -> result_array();
				if ($results) {
					foreach ($results as $result) {
						$effect = $result['effect'];
						$trans_name = $result['name'];
						if ($effect == 1) {
							if ($result['in_total'] != null) {
								$total = $result['in_total'];
							} else {
								$total = 0;
							}
						} else {
							if ($result['out_total'] != null) {
								$total = $result['out_total'];
							} else {
								$total = 0;
							}
						}
						$row[] = $total;
					}
				}
				//End of Other Transactions
				$output['aaData'][] = $row;
			}
			echo json_encode($output);

		}//Check if user is logged in end

	}
}