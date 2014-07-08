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

// $sql["v_sample_details"] 						=	"SELECT 
// 															`sa`.`id` 				AS 	`sample_id`,
// 															`sa`.`date_collected`	AS 	`date_collected`,
// 															`sa`.`date_dispatched`	AS 	`date_dispatched`,
// 															`sa`.`sample_type`		AS 	`sample_type`,
// 															`sa`.``					AS 	``,
// 															`sa`.``					AS 	``,
// 															`sa`.``					AS 	``,
// 															`sa`.``					AS 	``,
// 															`sa`.``					AS 	``,
// 															`sa`.``					AS 	``,
// 															`sa`.``					AS 	``,


// 													";



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

$config["views_sql"] =$sql;
