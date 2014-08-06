<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class dashboard_model extends MY_Model {

	public function __construct(){
		parent::__construct();

	}

	public function testing_trends($program=0){
		$year= $this->thisyear;
		$dat;
		if($program=1){
			$dat  =  R::getAll("SELECT * FROM `v_testing_trend_eid` WHERE `year` = '$year' ");
		}elseif($program=2){
			$dat  =  R::getAll("SELECT * FROM `v_testing_trend_vl` WHERE `year` = '$year' ");
		}else{
			$dat  =  R::getAll("SELECT * FROM `v_testing_trend` WHERE `year` = '$year' ");
		}


		$trends_data =array();

		//initialize the array

		$trends_data[0]["name"] = "Failed";
		$trends_data[0]["color"] = "#d9534f";
		$trends_data[0]["data"] = array(0,0,0,0,0,0,0,0,0,0,0,0);
		$trends_data[1]["name"] = "Positive";
		$trends_data[1]["color"] = "#ed9c28";
		$trends_data[1]["data"] = array(0,0,0,0,0,0,0,0,0,0,0,0);
		$trends_data[2]["name"] = "Negative";
		$trends_data[2]["color"] = "#6fb3e0";
		$trends_data[2]["data"] =array(0,0,0,0,0,0,0,0,0,0,0,0);

		foreach ($dat as $key => $value) {
			$trends_data[0]['data'][(int)$value['month']-1]=(int)$value["failed"];
			$trends_data[1]['data'][(int)$value['month']-1]=(int)$value["positive"];
			$trends_data[2]['data'][(int)$value['month']-1]=(int)$value["negative"];
		}


		return $trends_data;
	}


	public function tat($program){

		$year= $this->thisyear;
		$month= $this->thismonth;
		$data = array();

		//initialize
		$col_rec  = $rec_proc  = $proc_disp  = 	$coll_disp  = 	$this->months_init_array();


		$data['col_rec']		=	$this->tat_col_rec($program);
		$data['rec_proc']		=	$this->tat_rec_proc($program);
		$data['proc_disp']		=	$proc_disp;
		$data['coll_disp']		=	$coll_disp;

		return $data;		
		
	}

	private function tat_col_rec($program){
		$col_rec = $this->months_init_array();

		$program_delimiter = $this->program_delimiter($program);

		$sql = "SELECT 
							MONTH(`sa`.`date_collected`) AS `month`,
							AVG(DATEDIFF(`sa`.`timestamp`,`sa`.`date_collected`)) AS `avg_datediff`
						FROM `sample` `sa`
						WHERE YEAR(`sa`.`date_collected`) = '$this->thisyear'
						$program_delimiter 
						GROUP BY `month`
				";
		$res = R::getAll($sql);
		foreach ($res as $key => $value) {
			$col_rec[((int)$value['month'])-1]= (double)$value['avg_datediff'];
		}
		return $col_rec;
	}
	private function tat_rec_proc($program){

		$rec_proc = $this->months_init_array();

		$program_delimiter = $this->program_delimiter($program);

		$sql = "SELECT 
							MONTH(`sa`.`timestamp`) AS `month`,
							AVG(DATEDIFF(`sa`.`timestamp`,`str`.`date_released`)) AS `avg_datediff`
						FROM `sample` `sa`
						INNER JOIN `sample_test_run` `str`
						ON `str`.`sample_id`=`sa`.`id` 
						AND (`str`.`result`='P' OR `str`.`result`='N')
						WHERE YEAR(`sa`.`date_collected`) = '$this->thisyear'
						$program_delimiter 
						GROUP BY `month`
				";
		$res = R::getAll($sql);
		foreach ($res as $key => $value) {
			$rec_proc[((int)$value['month'])-1]= (double)$value['avg_datediff'];
		}
		return $rec_proc;
		
	}
	private function tat_proc_disp($program){
		

		// $proc_disp = $this->months_init_array();

		// $program_delimiter = $this->program_delimiter($program);

		// $sql = "SELECT 
		// 					MONTH(`sa`.`timestamp`) AS `month`,
		// 					AVG(DATEDIFF(`sa`.`timestamp`,`str`.`date_released`)) AS `avg_datediff`
		// 				FROM `sample` `sa`
		// 				INNER JOIN `sample_test_run` `str`
		// 				ON `str`.`sample_id`=`sa`.`id` 
		// 				AND (`str`.`result`='P' OR `str`.`result`='N')
		// 				WHERE YEAR(`sa`.`date_collected`) = '$this->thisyear'
		// 				$program_delimiter 
		// 				GROUP BY `month`
		// 		";
		// $res = R::getAll($sql);
		// foreach ($res as $key => $value) {
		// 	$proc_disp[((int)$value['month'])-1]= (double)$value['avg_datediff'];
		// }
		// return $proc_disp;
		
	}
	private function tat_coll_disp(){

		
	}

	public function todays_progress(){

		//sql for eid

		$vl_today = array(100,40,0,0,0);

		//sql for vl

		$eid_today = array(500,0,60,0,90);

		$data["vl_today"] 		=	$vl_today;
		$data["eid_today"] 		=	$eid_today;

		return $data;
	}

}