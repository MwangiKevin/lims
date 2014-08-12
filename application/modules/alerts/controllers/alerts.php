<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class alerts extends MY_Controller {

	public function test_results_specific($req_id){

	}

	public function all_test_results(){

		$max = $this->$maximum_test_runs;
		//non dispached requisitions
		$non_disp_req 	= R::getAll("SELECT 
											`req`.`id` 
										FROM `test_requisition` `req`
											WHERE `req`.`results_dispached`='0'
									");

		//requisitions to dispatch requisitions
		$req_to_dispach 	=	array();


		//remove requisitions not completely tested
		foreach ($non_disp_req as $key => $req) {
			$id = $req["id"];

			//check if any sample in the req is pending testing

			$samples_pending = R::getAll("	SELECT 
													* 
												FROM(
														SELECT
																`sa`.`id`,
																SUM(CASE WHEN (`str`.`result`= 'F')    THEN 1 ELSE 0 END) AS `failed_test_runs`,
																SUM(CASE WHEN (`str`.`result`= 'P' OR `str`.`result`= 'N')    THEN 1 ELSE 0 END) AS `successfull_test_runs`
															FROM `sample` `sa`
															LEFT JOIN `sample_test_run` `str`
															ON `sa`.`id`=`str`.`sample_id`
															WHERE `requisition_id` = '$id'
															AND `sa`.`acceptance_status`<> 'R'
															AND `sa`.`status`<> 'F'
															GROUP BY `sa`.`id`
													) `t1`
												WHERE `t1`.`failed_test_runs`< '$max'
												AND `t1`.`successfull_test_runs`< '1'
											");
			
		}						
	}	
}