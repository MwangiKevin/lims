<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheets_model extends MY_Model {
	
	public function unclassified_samples($program){//Program = eid or vl. flag = Cobas/Abbot
		$sql= "SELECT 
					id,
					no_of_dbs_spots,
					sample_id, 
					date_collected,
					COUNT(sample_id) AS runs 
				FROM `v_sample_details` 
				WHERE program = ".$program."
				AND result IS NULL 
				AND status IS NULL 
				AND no_of_dbs_spots > 0
				GROUP BY id 
				ORDER BY date_collected";
		$result = R::getAll($sql);
		
		return $result;
	}
	
	//samples waiting printing
	public function ready_samples($program,$flag){
		$sql= "SELECT 
				 vsd.id,
				 vsd.no_of_dbs_spots,
				 vsd.num,
				 ws.sample_id,
				 vsd.result
				FROM v_sample_details vsd
				
				LEFT JOIN worksheets_and_samples ws
				ON vsd.id = ws.sample_id
				LEFT JOIN worksheet wrk
				ON wrk.id = ws.worksheet_id
				
				WHERE  vsd.program = ".$program."
				AND wrk.flag = ".$flag."
				AND vsd.status = 'r'
				AND vsd.result IS NULL 
		";
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
						`ws`.`id`,
						`vsd`.`result`,
						`vsd`.`sample_id`
				FROM worksheet AS ws
				LEFT JOIN v_sample_details AS vsd
				ON `vsd`.`worksheet_id` = `ws`.`id`	
				GROUP BY `ws`.`id`";
				
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
	
	//gets last id within worksheet table
	public function last(){
		$sql = "SELECT id FROM worksheet ORDER BY id DESC LIMIT 1;";
		$result = R::getALL($sql);
		
		if(empty($result)){
			//$result = array('id'=>1);
			$result = 1;
		}
		return $result;	
	}
	
	public function delete_worksheet($id){
		$sql = "DELETE FROM worksheet WHERE id = ".$id." ";
		$this->db->query($sql);
		echo "sucess";
	}
	
	
	public function edit_worksheet($id){
		$date_created = $_POST['date_created_zoome'];
		$created_by = $_POST['created_by_zoome'];
				
		$date_run = $_POST['date_run_zoome'];
		$date_updated = $_POST['date_updated_zoome'];
		$date_reviewed = $_POST['date_reviewed_zoome'];
		
		$sql = "UPDATE worksheet SET date_created = ".$date_created.",created_by = '".$created_by."',date_run=".$date_run.", date_reviewed = ".$date_reviewed." WHERE id = ".$id." ";
		$this->db->query($sql);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
	