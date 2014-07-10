<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheets_model extends MY_Model {
	
	public function cobas_samples($program){//either DBS or plasma
		$sql = "SELECT sample_id,test_run_no FROM `v_sample_details` 
		WHERE program = ".$program."
		ORDER BY test_run_no";
		$result = R::getAll($sql);
		
		return $result;
	}
	
	public function abbott_samples($program){//either DBS or plasma
		//query gets all the samples, how do i filter btwn abbott and cobas destined sample
		$sql = "SELECT sample_id,test_run_no,program FROM `v_sample_details` 
				WHERE program = ".$program."
				ORDER BY test_run_no";
				//ORDER BY date_collected";
		$result = R::getAll($sql);
		return $result;
	}
}
	