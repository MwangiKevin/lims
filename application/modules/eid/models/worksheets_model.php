<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheets_model extends MY_Model {
	
	public function cobas_samples($program){//either eid or vl
		$sql= "SELECT id,no_of_dbs_spots,sample_id, COUNT(sample_id) AS runs FROM `v_sample_details` 
				WHERE program = ".$program." AND result IS NULL
				GROUP BY id ORDER BY runs DESC";
		$result = R::getAll($sql);
		
		return $result;
	}
	
	public function abbott_samples($program){//either DBS or plasma
		//query gets all the samples, how do i filter btwn abbott and cobas destined sample
		$sql = "SELECT id,no_of_dbs_spots,sample_id, COUNT(sample_id) AS runs FROM `v_sample_details` 
				WHERE program = ".$program." AND result IS NULL
				GROUP BY id ORDER BY runs DESC";
		$result = R::getAll($sql);
		return $result;
	}
	
	public function history(){
		$sql = "SELECT  ws.`date_reviewed`,  ws.`date_updated`, ws.`date_run`, ws.`status`, ws.`flag`, ws.`created_by`, ws.`date_created`, vsd.result
FROM worksheet AS ws
LEFT JOIN v_sample_details AS vsd
ON vsd.requisition_id = ws.cdc_worksheet_no	";
			$result = R::getAll($sql);
			return $result;
	}
}
	