<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheets_model extends MY_Model {
	
	public function cobas_samples($program){//either eid or vl
		$sql= "SELECT id,no_of_dbs_spots,sample_id, COUNT(sample_id) AS runs FROM `v_sample_details` 
				WHERE program = ".$program." 
				GROUP BY id ORDER BY runs DESC";
		$result = R::getAll($sql);
		
		return $result;
	}
	
	public function abbott_samples($program){//either DBS or plasma
		//query gets all the samples, how do i filter btwn abbott and cobas destined sample
		$sql = "SELECT id,no_of_dbs_spots,sample_id, COUNT(sample_id) AS runs FROM `v_sample_details` 
				WHERE program = ".$program." 
				GROUP BY id ORDER BY runs DESC";
		$result = R::getAll($sql);
		return $result;
	}
}
	