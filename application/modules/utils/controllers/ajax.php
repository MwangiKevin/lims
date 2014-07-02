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
}