<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class reports_model extends MY_Model {
	
	public function all_samples_m($start_date, $end_date){
		$sql = "SELECT
					`vsd`.`sample_id`,
					`vsd`.`no_of_dbs_spots`,
					`vsd`.`prohilaxis`,
					`vsd`.`date_dispatched`,
					`vsd`.`result`,
					`vsd`.`acceptance_status`,
					`vsd`.`date_collected`,
					`vsd`.`patient_id`,
					`p`.`dob`,
					`p`.`gender`,
					`p`.`facility_id`,
					`vfd`.`facility_name`,
					`vfd`.`district_name`,
					`vfd`.`region_name`,
					`w`.`date_created`
				FROM 
					 `v_sample_details` AS `vsd`
					 `patient` AS `p`	 
					 `worksheets` AS `w`
				 	 `worksheets_and_sampls` AS `ws`
				 	 `v_facility_details` AS `vfd`
				WHERE 
					date BETWEEN ".$start_date." ".$end_date." 
					AND `w`.`id` = `ws`.`worksheet_id`
					AND `p`.`id` = `vsd`.`patient_id`	
					AND `p`.`facility_id` = `vfd`.`v_facility_details`";
		
		$result = R::getAll($sql);
		return $result;
	}
	
	public function reports_by_area($region,$start_date,$end_date){
		$sql = "SELECT
				WHERE date BETWEEN ".$start_date." ".$end_date." ";
		$result = R::getAll($sql);
		return $result;
	}
	
	
	
	
	public function regions(){
		$sql = "SELECT * FROM region";
		$result = R::getAll($sql);
		// print_r($result);
		// die;
		return $result;	
	}
	public function districts(){
		$sql = "SELECT * FROM district";
		$result = R::getAll($sql);
		return $result;
		
	}
	public function facilities(){
		$sql = "SELECT * FROM facility";
		$result = R::getAll($sql);
		return $result;		
	}
	
	
}