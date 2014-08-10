<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class alerts extends MY_Controller {

	public function test_results_specific($req_id){

	}

	public function all_test_results(){
		//non dispached requisitions
		$non_disp_req 	= R::getAll("SELECT 
											`req`.`id` 
										FROM `test_requisition` `req`
										LEFT JOIN `results_dispach` `dis`
										ON `req`.`id`<>`dis`.`requisition_id`
										LEFT JOIN `sample` `sa`
										ON `req`.`id`=`sa`.`requisition_id`

										GROUP BY `req`.`id` 
									");

	}
	
}