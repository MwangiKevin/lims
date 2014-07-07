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
