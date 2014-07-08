<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheets_model extends MY_Model {
	
	public function cobas_samples(){//either DBS or plasma
		//gets the number of test runs
		// $i=0;
		// $sql1 = "SELECT sample_id,test_run_no FROM `sample_test_run` WHERE 1 ORDER BY test_run_no DESC";//test runs
		// $result1 = R::getAll($sql1);
// 		
		// foreach($result1 as $res){
			// $sample_id = $res['sample_id'];//sample id's from test runs
			// //echo("sample id ".$sample_id);
// 			
			// //query gets all the samples, how do i filter btwn abbott and cobas destined sample
			// $sql = "SELECT * FROM `sample` 
					// WHERE id = ".$sample_id." ";
				// //ORDER BY date_collected";
			// $result = R::getAll($sql);
// 			
			// //echo("Run " .$result);
			// // foreach($result AS $res1){
				// // $dbs = $res1["no_of_dbs_spots"];
				// // echo("DBS No ".$dbs);
			// // }
		// }
		$sql = "SELECT id,dbsNo FROM dbs_samples ORDER BY dbsNo ASC";
		$result = R::getAll($sql);
		
		return $result;
	}
	
	public function abbott_samples($test_type){//either DBS or plasma
		//query gets all the samples, how do i filter btwn abbott and cobas destined sample
		$sql = "SELECT * FROM `sample` 
				WHERE 1
				ORDER BY no_of_dbs_spots";
				//ORDER BY date_collected";
		$result = R::getAll($sql);
		
			
		return $result;
	}
}