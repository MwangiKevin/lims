<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
* @author Maestro
*/
class ajax extends MY_Controller {


	/**
	* @job =  Constructor
	*/
	function __construct() {
		parent::__construct();
	}

	public function get_facility_details($id =null){

		$fac 	=	R::getAll("SELECT * FROM `v_facility_details` WHERE `facility_id` = '$id'");
		if(sizeof($fac)>0){
			echo json_encode($fac[0]);
		}
	}

	public function get_requisition_details_json(){

		$req 	=	R::getAll("SELECT * FROM `v_requisition_details` ");

		//print_r($req);
		$json_req 	=	array();
		foreach ($req as $key => $value) {
			$json_req[] = 	array(

									$value["requisition_number"],
									$value["facility_name"],
									$value["date_received"],
									$value["date_entered"],
									"0",
									$value["total"],
									$value["rejected"],
									$value["with_results"],
									$value["total"]-$value["with_results"],
									"NA",
									$value["entered_by"]

									);
		}

		echo json_encode($json_req);


	}
}