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
															`fac`.`contact_person_phone` 		AS `facility_contact_person_phone`,
															`fac`.`district_id`, 
															`dis`.`name` 			AS `district_name`,
															`dis`.`status` 			AS `district_status`,
															`dis`.`region_id`,
															`reg`.`name`			AS `region_name`,
															`reg`.`fusion_id`		AS `region_fusion_id`

														FROM `facility` `fac`
															LEFT JOIN `district` `dis`
															ON `fac`.`district_id` = `dis`.`id`
																LEFT JOIN `region` `reg`
																ON `dis`.`region_id` = `reg`.`id`

														GROUP BY `facility_id`
														ORDER BY `facility_name` ASC
													";


$config["views_sql"] =$sql;
