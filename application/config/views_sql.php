<?php
/*
|--------------------------------------------------------------------------
| PRESET CD4 SQL LIBRARY
|--------------------------------------------------------------------------
|
| Path to the script directory.  Relative to the CI front controller.
 * @package		sql
 * @author		Kevin MWangi 
 * @email 		mwangikevinn@gmail.com
 * @usage 		-load config ->item("preset_sql");
 *				-returns a predefines resultset
 */
$sql["v_facility_details"]  					= 	"SELECT 

															`fac`.`id` 				AS `facility_id`,
															`fac`.`code` 			AS `facility_code`,
															`fac`.`name` 			AS `facility_name`,
															`fac`.`email` 			AS `facility_email`,
															`fac`.`mail_address` 	AS `facility_mail_address`,	
															`fac`.`telephone` 		AS `facility_telephone`,
															`fac`.`telephone2` 		AS `facility_telephone2`,
															`fac`.`district_id`, 
															`dis`.`name` 			AS `district_name`,
															`dis`.`status` 			AS `district_status`,
															`dis`.`region_id`,
															`reg`.`name`			AS `region_name`,
                                                            `fac`.`contact_person_phone` 		AS `facility_contact_person_phone`,
															`reg`.`fusion_id`		AS `region_fusion_id`
														FROM `facility` `fac`
															LEFT JOIN `district` `dis`
															ON `fac`.`district_id` = `dis`.`id`
																LEFT JOIN `region` `reg`
																ON `dis`.`region_id` = `reg`.`id`

														GROUP BY `facility_id`
														ORDER BY `facility_name` ASC
													";
//`fac`.`code` 			AS `facility_code`,
//`fac`.`mail_address` 	AS `facility_mail_address`,
//`fac`.`phone` 		    AS `facility_telephone`,
//`fac`.`telephone` 		AS `facility_telephone`,
//`fac`.`telephone2` 		AS `facility_telephone2`,
//`fac`.`contact_person_phone` 		AS `facility_contact_person_phone`,

$sql["v_Requisition_details"] 						=	"SELECT 
																`req`.`id` 			 	AS 	`requisition_number`,
																`req`.`date_received` ,	
																Date(`req`.`timestamp`)	AS `date_entered`,	
																`req`.`facility_id` ,	
																`req`.`program_id`,
																`req`.`comments`,
																`req`.`lab_comments`,
																`req`.`flag` 			AS 	`req_flag`,
																`req`.`synced` 			AS 	`req_synced`,
																`req`.`timestamp` 		AS 	`requisition_timestamp`,
																`fac`.`name`            AS 	`facility_name`,
																COUNT(`sa`.`id`) 															AS 	`total`,
																SUM(CASE WHEN `sa`.`acceptance_status`= 'R'    THEN 1 ELSE 0 END) 			AS 	`rejected`,
																SUM(CASE WHEN `tr`.`result` > 0    THEN 1 ELSE 0 END) 						AS 	`with_results`,
																`req`.`entered_by` 		AS `user_id`,
																`usr`.`name` 			AS `entered_by`
															FROM `test_requisition` `req`

															LEFT JOIN `facility` `fac`
															ON `req`.`facility_id` = `fac`.`id`

															LEFT JOIN `sample` `sa`
															ON `req`.`id` = `sa`.`requisition_id`

																LEFT JOIN `sample_test_run` `tr`
																ON `sa`.`id`=`tr`.`sample_id`

															LEFT JOIN `user` `usr`
															ON `req`.`entered_by` = `usr`.`id`

															GROUP BY `requisition_number`
															ORDER BY `date_received` DESC

															LIMIT 500
													";
$sql["v_sample_details"]	=	"SELECT 
									`sample`.`id`,
									`sample`.`patient_id`,
									`sample`.`requisition_id`,
									`sample`.`date_collected`,
									`sample`.`date_dispatched`,
									`sample`.`program`,
									`sample`.`sample_type`,
									`sample`.`clinician_name`,
									`sample`.`no_of_dbs_spots`,
									`sample`.`infant_feeding`,
									`sample`.`prohilaxis`,
									`sample`.`prophilaxis_weeks`,
<<<<<<< HEAD
									`sample`.`acceptance_status`,								
=======
									`sample`.`acceptance_status`,
									`sample`.`delete`,
									
>>>>>>> af0b12bf63476cc4aec4ba76cf92bcb729f4317d
									`test`.`sample_id`,
									`test`.`test_run_no`,
									`test`.`result`,
									`test`.`date_released`,
									COUNT(`test`.`id`) AS `num`,
									
									`ws`.`worksheet_id`,
									
									`w`.`status`
							FROM sample 
							LEFT JOIN `sample_test_run` AS `test`
							ON `test`.`sample_id` = `sample`.`id`
								LEFT JOIN `worksheets_and_samples`AS `ws`
								ON `ws`.`sample_id` = `sample`.`id`
									LEFT JOIN `worksheet` AS `w`
									ON `w`.`id` = `ws`.`worksheet_id`
							GROUP BY `sample`.`id`						
							LIMIT 500";													



$sql["v_user_details"] 				 = 				"SELECT 
															`usr`.`id` 				AS `user_id`,
															`usr`.`username`,
															`usr`.`name`,
															`usr`.`user_group_id`,
															`usr_gr`.`name` 		AS `user_group`,
															`usr`.`phone`,
															`usr`.`email`,
															`usr`.`status`
															
														FROM `user` `usr` 
															LEFT JOIN `user_group` `usr_gr`
															ON `usr`.`user_group_id` = `usr_gr`.`id`
															
													";

$sql["v_testing_trend"]					=			"SELECT 
															YEAR(`tr`.`date_released`) 	AS `year`,
															MONTH(`tr`.`date_released`) 	AS `month`,
															CONCAT(YEAR(`tr`.`date_released`),'-',MONTH(`tr`.`date_released`)) AS `yearmonth`,
															SUM(CASE WHEN `tr`.`result`= 'P'    THEN 1 ELSE 0 END) AS `positive`,
															SUM(CASE WHEN `tr`.`result`= 'N'    THEN 1 ELSE 0 END) AS `negative`,
															SUM(CASE WHEN `tr`.`result`= 'F'    THEN 1 ELSE 0 END) AS `failed`
														FROM `sample_test_run` `tr`
														LEFT JOIN `sample` `s`
														ON `tr`.`sample_id` = `s`.`id`
														GROUP BY `yearmonth`
														ORDER BY `date_released` DESC
													";

$sql["v_testing_trend_eid"]				=			"SELECT 
															YEAR(`tr`.`date_released`) 	AS `year`,
															MONTH(`tr`.`date_released`) 	AS `month`,
															CONCAT(YEAR(`tr`.`date_released`),'-',MONTH(`tr`.`date_released`)) AS `yearmonth`,
															SUM(CASE WHEN `tr`.`result`= 'P'    THEN 1 ELSE 0 END) AS `positive`,
															SUM(CASE WHEN `tr`.`result`= 'N'    THEN 1 ELSE 0 END) AS `negative`,
															SUM(CASE WHEN `tr`.`result`= 'F'    THEN 1 ELSE 0 END) AS `failed`
														FROM `sample_test_run` `tr`
														LEFT JOIN `sample` `s`
														ON `tr`.`sample_id` = `s`.`id`
														WHERE `s`.`program`='1' 
														GROUP BY `yearmonth`
														ORDER BY `date_released` DESC
													";


$sql["v_testing_trend_vl"]				=			"SELECT 
															YEAR(`tr`.`date_released`) 	AS `year`,
															MONTH(`tr`.`date_released`) 	AS `month`,
															CONCAT(YEAR(`tr`.`date_released`),'-',MONTH(`tr`.`date_released`)) AS `yearmonth`,
															SUM(CASE WHEN `tr`.`result`= 'P'    THEN 1 ELSE 0 END) AS `positive`,
															SUM(CASE WHEN `tr`.`result`= 'N'    THEN 1 ELSE 0 END) AS `negative`,
															SUM(CASE WHEN `tr`.`result`= 'F'    THEN 1 ELSE 0 END) AS `failed`
														FROM `sample_test_run` `tr`
														LEFT JOIN `sample` `s`
														ON `tr`.`sample_id` = `s`.`id`
														WHERE `s`.`program`='2' 
														GROUP BY `yearmonth`
														ORDER BY `date_released` DESC
													";

$sql["v_tat"]							= 			"SELECT 
															`req`.*,
															`sa`.`id` AS `sample_id`,
															`sa`.`patient_id`,
															`sa`.`requisition_id`,
															`sa`.`date_collected`,
															`sa`.`date_dispatched`,
															`sa`.`program`,
															`sa`.`sample_type`,
															`sa`.`clinician_name`,
															`sa`.`no_of_dbs_spots`,
															`sa`.`infant_feeding`,
															`sa`.`prohilaxis`,
															`sa`.`prophilaxis_weeks`,
															`sa`.`acceptance_status`,
															`sa`.`status`,
															`sa`.`timestamp` AS `sample_timestamp`
														FROM `test_requisition` `req`

														INNER JOIN `sample` `sa`
														ON `sa`.`requisition_id`=`req`.`id`

															INNER JOIN `sample_test_run` `tr`
															ON `tr`.`sample_id`= `sa`.`id`
															AND (`tr`.`result`='P' OR `tr`.`result`='N')

														
													";			
$sql["v_results"]			 			=			"SELECT 
															`str`.*,
															`sa`.`patient_id`      		,
															`sa`.`requisition_id`   	,
															`sa`.`date_collected`   	,
															`sa`.`date_dispatched`  	,
															`sa`.`program`      		,
															`sa`.`sample_type`      	,
															`sa`.`clinician_name`   	,
															`sa`.`no_of_dbs_spots`  	,
															`sa`.`infant_feeding`   	,
															`sa`.`prohilaxis`      		,
															`sa`.`prophilaxis_weeks`    ,
															`sa`.`acceptance_status`    ,
															`sa`.`status`      			,
															`sa`.`timestamp`      		,
															`pa`.`facility_id`	AS `pa_facility_id`,
															`pa`.`code`         AS `patient_code`,
															`pa`.`dob`,
															`pa`.`gender`,
															`pa`.`synced` 		AS 	`patient_synced`	,
															`pa`.`timestamp` 	AS 	`patient_timestamp`	,
															`req`.`facility_id`,
															`req`.`date_received`,
															`req`.`program_id`,
															`req`.`rejection_address`,
															`req`.`comments`,
															`req`.`lab_comments`,
															`req`.`flag`		AS 	`req_flag`,
															`req`.`synced` 		AS 	`req_synced`,
															`req`.`timestamp` 	AS 	`req_timestamp`,
															`req`.`entered_by`,
															`req`.`results_dispached`,
															`fac`.`name` 		AS `facility_name`
														FROM `sample_test_run` `str`
															LEFT JOIN `sample` `sa`
															ON `sa`.`id`= `str`.`sample_id`
															LEFT JOIN `patient` `pa`
															ON `sa`.`patient_id`= `pa`.`id`
															LEFT JOIN `test_requisition` `req`
															ON `sa`.`requisition_id`= `req`.`id`
																LEFT JOIN `facility` `fac`
																ON `req`.`facility_id` = `fac`.`id`

														GROUP BY `str`.`id`
														ORDER BY `str`.`id` DESC
											";

$config["views_sql"] =$sql;
