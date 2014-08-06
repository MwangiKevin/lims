<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class reports_model extends MY_Model {
	
	public function all_samples_m($start_date, $end_date){
		$sql = "SELECT 
				WHERE date BETWEEN ".$start_date." ".$end_date." ";
		
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