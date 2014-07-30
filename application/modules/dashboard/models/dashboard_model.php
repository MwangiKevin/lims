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


	public function tat(){

		$year= $this->thisyear;
		$month= $this->thismonth;

		for($i=0;$i<$month;$i++){
			$months_init[$i] = 0;
		}

		$col_rec  = $rec_proc  = $proc_disp  = 	$coll_disp  = 	$months_init;

		//echo json_encode($months_init);

		
		
	}

	private function tat_col_rec(){
		
		
	}
	private function tat_rec_proc(){

		
	}
	private function tat_proc_disp(){

		
	}
	private function tat_coll_disp(){

		
	}

}