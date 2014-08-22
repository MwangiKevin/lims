<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class alerts extends MY_Controller {

	public function test_results_specific($req_id){

	}

	public function all_test_results(){

		$max = $this->$maximum_test_runs;
		//non dispached requisitions
		$non_disp_req 	= R::getAll("SELECT 
											`req`.`id` 
										FROM `test_requisition` `req`
											WHERE `req`.`results_dispached`='0'
									");

		//initialize requisitions to dispatch requisitions
		$req_to_dispach 	=	array();


		//remove requisitions not completely tested
		foreach ($non_disp_req as $key => $req) {
			
			$id = $req["id"];
			//check if any sample in the req is pending testing

			$samples_pending = R::getAll("	SELECT 
													* 
												FROM(
														SELECT
																`sa`.`id`,
																SUM(CASE WHEN (`str`.`result`= 'F')    THEN 1 ELSE 0 END) AS `failed_test_runs`,
																SUM(CASE WHEN (`str`.`result`= 'P' OR `str`.`result`= 'N')    THEN 1 ELSE 0 END) AS `successfull_test_runs`
															FROM `sample` `sa`
															LEFT JOIN `sample_test_run` `str`
															ON `sa`.`id`=`str`.`sample_id`
															WHERE `requisition_id` = '$id'
															AND `sa`.`acceptance_status`<> 'R'
															AND `sa`.`status`<> 'F'
															GROUP BY `sa`.`id`
													) `t1`
												WHERE `t1`.`failed_test_runs`< '$max'
												AND `t1`.`successfull_test_runs`< '1'
											");			

			//exclude samples not pending

			if(sizeof($samples_pending)==0){
				$req_to_dispach[] = 	$id;
			}

		}
		$this->req_to_dispach($req_to_dispach);		
	}	

	public function req_to_dispach($req_to_dispach = array()){

		foreach ($req_to_dispach as $key => $value) {
			$this->dispatch_re_results($value);
		}
	}

	public function dispatch_re_results($req_id){

		$results 	=	R::getAll("SELECT *
										FROM `v_results`
										WHERE `requisition_id` ='$req_id'

								");
		try{
			$this->email($results);
			$this->sms($results);
			$this->mark_dispached($results);


		}catch(Exception $e){

		}

	}

	private function email($results){
		$rows = "";

		foreach ($results as $key => $value) {
			$rows .= "
						<tr>
							<td>".$value["patient_code"]."</td>
							<td>".$value["date_collected"]."</td>
							<td>".$value["date_released"]."</td>
							<td>".$value["result"]."</td>
						</tr>
					";
		}

		$message=	"

					<div>
					Hello  ".$value["facility_name"].",<br/>

					Find below the test results for requisition made ".$value["req_timestamp"].",
						<br/>
						<div style='float:left;width:33%;'>Requisition No : </div>
						<div style='float:left;width:33%;'>Requisition Date :</div>
						<div style='float:left;width:33%;'>Facility Name:</div>

						<table style='width:60%'>
							<thead>
								<tr>
									<th>Patient Code</th>
									<th>Date Sample <br/>was Collected</th>
									<th>Date Results <br/>were released</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								$rows
							</tbody>
						</table>
					</div>
				";
		$this->load->module("alerts/email");
		$this->email->email(1, "mwangikevinn@gmail.com", "Test Results", "$message");

		echo $message;
	}

	private function sms($results){



	}
	private function mark_dispached($req_id){
		 $this->db->query("UPDATE `test_requisition` SET  `results_dispached`='1' WHERE `id`='$req_id'");
	}
}