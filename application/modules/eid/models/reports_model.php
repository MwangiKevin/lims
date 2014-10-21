<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class reports_model extends MY_Model {
	
	public function all_samples_m($start_date, $end_date){
		$sql = "SELECT
					`vsd`.`sample_id` AS sample_id, 
					`vsd`.`no_of_dbs_spots` AS dbs_spots,
					`vsd`.`prohilaxis` AS propholaxis,
					`vsd`.`date_dispatched` AS dispatch,
					`vsd`.`result` AS test_result,
					`vsd`.`acceptance_status` AS acceptance_status,
					`vsd`.`date_collected` AS date_collected,
					`vsd`.`patient_id` AS patient_id,
					`p`.`dob` AS dob,
					`p`.`gender` AS gender,
					`vfd`.`facility_name` AS facility_name,
					`vfd`.`district_name` AS district_name,
					`vfd`.`region_name` AS region_name,
					`w`.`date_created` AS date_tested
				FROM 
					 `v_sample_details` `vsd`
                LEFT JOIN
					 `patient` `p` 
                ON    `p`.`id` = `vsd`.`patient_id`
                LEFT JOIN   
                     `v_facility_details`  `vfd`    	 
                ON   `p`.`facility_id` = `vfd`.`facility_id`
                LEFT JOIN 
                     `worksheets_and_samples` `ws`				 	
                ON    `vsd`.`sample_id` = `ws`.`sample_id`
                LEFT JOIN
	                 `worksheet`  `w`
				ON    `w`.`id` = `ws`.`worksheet_id`";
				// WHERE
					// `vsd`.`date_released` BETWEEN ".$start_date." AND ".$end_date." 
					// "; 
		
		$result = R::getAll($sql);
		// if(empty($result)){
			// echo "empty";
		// }else{
			// echo "content";
			// die;
		// }
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