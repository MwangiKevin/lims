<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheets_model extends MY_Model {
	
	public function cobas_samples($program){//either eid or vl
		$sql= "SELECT id,no_of_dbs_spots,sample_id, COUNT(sample_id) AS runs FROM `v_sample_details` 
				WHERE program = ".$program." AND result IS NULL AND status IS NULL AND no_of_dbs_spots > 0
				GROUP BY id ORDER BY runs DESC";
		$result = R::getAll($sql);
		
		return $result;
	}
	public function ready_samples($program){
		$sql= "SELECT id,no_of_dbs_spots,sample_id, COUNT(sample_id) AS runs FROM `v_sample_details` 
				WHERE program = 1 AND result = ' ' AND status = 'r'	GROUP BY id ORDER BY runs DESC";
		$result = R::getAll($sql);
		
		return $result;
	}
	
	public function abbott_samples($program){//either DBS or plasma
		//query gets all the samples, how do i filter btwn abbott and cobas destined sample
		$sql = "SELECT id,no_of_dbs_spots,sample_id, COUNT(sample_id) AS runs FROM `v_sample_details` 
				WHERE program = ".$program." AND result IS NULL AND status IS NULL AND no_of_dbs_spots > 0
				GROUP BY id ORDER BY runs DESC";
		$result = R::getAll($sql);
		return $result;
	}
	
	public function history(){
		$sql = "SELECT  `ws`.`date_reviewed`,
						`ws`.`date_updated`, 
						`ws`.`date_run`,
						`ws`.`status`, 
						`ws`.`flag`,
						`ws`.`created_by`,
						`ws`.`date_created`,
						`vsd`.`result`,
						`vsd`.`sample_id`
				FROM worksheet AS ws
				LEFT JOIN v_sample_details AS vsd
				ON vsd.worksheet_id = ws.id	
				GROUP BY sample_id";
				
		$result = R::getAll($sql);
		return $result;
	}
	
	public function cobas_rack($id){
		$sql = "SELECT
					`cw`.`id`,
					`cw`.`worksheet_id`,
					`cw`.`cdc_worksheet_no`,
					`cw`.`lot_no`,
					`cw`.`HIQCAPNo`,
					`cw`.`rack_no`,
					`cw`.`kit_expiry_date`,
					`cw`.`Spek_kit_no`,
					`cw`.`sample_prep_lot_no`,
					`cw`.`sample_prep_expiry-date`,
					`w`.`cdc_worksheet_no`,
					`w`.`date_created`,
					`w`.`updated_by`,
					`w`.`date_cut`,
					`w`.`date_run`,
					`w`.`reviewed_by`,
					`w`.`date_reviewed`,
					`w`.`created_by`
				FROM cobas_worksheet AS cw
				LEFT JOIN worksheet AS w
				ON `w`.`id` = `cw`.`worksheet_id` 
				WHERE `w`.`id` = ".$id." AND `cw`.`worksheet_id` = ".$id."  ";
			$result = R::getAll($sql);
			return $result;		
	}
	
	public function abbott_rack($id){
		$sql = "SELECT
					`w`.`cdc_worksheet_no`,
					`w`.`date_created`,
					`w`.`updated_by`,
					`w`.`date_cut`,
					`w`.`date_run`,
					`w`.`reviewed_by`,
					`w`.`date_reviewed`,
					`w`.`created_by`,
					`aw`.`calibrator`,
					`aw`.`worksheet_id`,
					`aw`.`calibrator_lot_no`,
					`aw`.`calibrator_expiry_date`,
					`aw`.`amplification_kit_lot_no`,
					`aw`.`amplification_expiry_date`,
					`aw`.`control`,
					`aw`.`control_lot_no`,
					`aw`.`control_expiry_date`,
					`aw`.`bulk_lysis_lot_no`,
					`aw`.`bulk_lysis_expiry_date`,
					`aw`.`sample_prep_lot_no`,
					`aw`.`sample_prep_expiry_date`
				FROM abbot_worksheet AS aw
				LEFT JOIN worksheet AS w
				ON `w`.id = `aw`.`worksheet_id`
				WHERE `w`.`id` = ".$id." AND `aw`.`worksheet_id` = ".$id." ";
		$result = R::getAll($sql);
		return $result;
	}	
	
	public function last(){
		$sql = "SELECT id FROM worksheet ORDER BY id DESC LIMIT 1;";
		$result = R::getALL($sql);
		
		if(empty($result)){
			//$result = array('id'=>1);
			$result = 1;
		}
		return $result;	
	}
	
	
	
	
}
	