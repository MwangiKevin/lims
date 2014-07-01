<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class requisition extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"eid/requisition_view";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID | Requisition";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array("style-date-time")));		

		
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"EID";
				
		$this->view_data['menu_select']		= 	array(1,0);
		// $this->view_data['menu_select']		= 	"side_dashboard";
		// $this->view_data['submenu_select']	= 	"none";
		$this->view_data['breadcrumbs'] 	=	array(
			0 	=>	array(
				"title" 	=>	"Home",
				"link"		=>	base_url()."eid/",
				"class"		=>	""
				),
			1 	=>	array(
				"title" 	=>	"Requisition",
				"link"		=>	base_url()."eid/requisition",
				"class"		=>	"active"
				),
			2 	=>	array(
				"title" 	=>	"Fill",
				"link"		=>	base_url()."eid/requisition/fill",
				"class"		=>	"active"
				)
			); 

		//page data

		$this->load->model('requisition_model');

		$this->view_data['prophilaxes'] 	= 	$this->requisition_model->prophilaxes();
		$this->view_data['infant_feeding'] 	= 	$this->requisition_model->infant_feeding();
		$this->view_data['facilities'] 		= 	$this->requisition_model->facilities();

	}

	public function index(){

		$this->fill();
	}

	public function fill(){		
		
		$this -> template($this->view_data);
	}

	public function submit_requisition(){
		
		echo "<pre>";
		// print_r($this->input->post());

		// requisition
		$facility_id 		=	$this->input->post("facility_id");
		$date_received 		=	$this->input->post("date_received");
		$comments 			=	$this->input->post("comments");
		$lab_comments 		=	$this->input->post("lab_comments");
		$entered_by 		=	(int) $this->session->userdata("id");		

		//sample
		$date_coll 			=	$this->input->post("date_coll");
		$date_sent 			=	$this->input->post("date_sent");
		$spots 				=	$this->input->post("spots");
		$clinician 			=	$this->input->post("clinician");
		$infant_feeding 	=	$this->input->post("infant_feeding");
		$infant_prophilaxis	=	$this->input->post("infant_prophilaxis");
		$prophilaxis_weeks	=	$this->input->post("prophilaxis_weeks");

		//test reason
		$test_reason 		=	$this->input->post("test_reason");

		//patient
		$patient_code 		=	$this->input->post("patient_code");
		$infant_dob 		=	$this->input->post("infant_dob");
		$infant_gender 		=	$this->input->post("infant_gender");
		$infant_hiv_status 	=	$this->input->post("infant_hiv_status");
		$infant_age 		=	$this->input->post("infant_age");

		//infant
		$mother_hiv_status	=	$this->input->post("mother_hiv_status");
		$pregnancy_pmtc 	=	$this->input->post("pregnancy_pmtc");
		$preg_pmtc_duration	=	$this->input->post("preg_pmtc_duration");
		$delivery_pmtc 		=	$this->input->post("delivery_pmtc");
		$caregiver_phone 	=	$this->input->post("caregiver_phone");

 			

		if( sizeof($date_coll) > 0 && $this->input->post("facility_id") != ""){

			$test_req_st		=	R::getAll(	"SHOW TABLE STATUS WHERE `Name` = 'test_requisition'"	);
			$sample_st			=	R::getAll(	"SHOW TABLE STATUS WHERE `Name` = 'sample'"	);
			$reason_st			=	R::getAll(	"SHOW TABLE STATUS WHERE `Name` = 'sample_test_requisition_reason'"	);
			$patient_st			=	R::getAll(	"SHOW TABLE STATUS WHERE `Name` = 'patient'"	);
			$infant_st			=	R::getAll(	"SHOW TABLE STATUS WHERE `Name` = 'infant'"	);

			$test_req_auto_id 	=	(int) $test_req_st[0]["Auto_increment"];
			$sample_auto_id 	=	(int) $sample_st[0]["Auto_increment"];
			$reason_auto_id 	=	(int) $reason_st[0]["Auto_increment"];
			$patient_auto_id 	=	(int) $patient_st[0]["Auto_increment"];
			$infant_auto_id 	=	(int) $infant_st[0]["Auto_increment"];

			$this->db->trans_begin();
			$error =	false;

			$this->db->query("INSERT INTO `test_requisition`
								(
									`id`,
									`facility_id`,
									`date_received`,
									`comments`,
									`lab_comments`,
									`program_id`,
									`entered_by`
								)
								VALUES(
									'$test_req_auto_id',
									'$facility_id',
									'".date('Y-m-d', strtotime($date_received))."',
									'$comments',
									'$lab_comments',
									'1',
									'$entered_by'
								)
							");
			foreach ($date_coll as $key => $value) {

				//check if patient exists
				$exists = false;
				
				$id = (int) R::getAll("SELECT id  FROM `patient` WHERE `facility_id` ='$facility_id'  AND `patient_code`='$patient_code[$key]'");
				 	

				$this->db->query("INSERT INTO `patient`
										(
											`id`,
											`facility_id`,
											`code`,
											`name`,
											`dob`,
											`gender`
										)
									VALUES(
											'$patient_auto_id',
											'$facility_id',
											'$patient_code[$key]',
											'',
											'".date('Y-m-d', strtotime($infant_dob[$key]))."',
											'$infant_gender[$key]'
										)
								");

				$this->db->query("INSERT INTO `infant`
										(
											`id`,
											`patient_id`,
											`mother_hiv_status`,
											`pregnancy_pmtc`,
											`pregnancy_pmtc_weeks`,
											`delivery_pmtc`,
											`caregiver_phone`
										)
									VALUES(
											'',
											'$patient_auto_id',
											'$mother_hiv_status[$key]',
											'$pregnancy_pmtc[$key]',
											'$preg_pmtc_duration[$key]',
											'$delivery_pmtc[$key]',
											'$caregiver_phone[$key]'
										)
								");
				
				$this->db->query("INSERT INTO `sample`
									(
										`id`,
										`patient_id`,
										`requisition_id`,
										`date_collected`,
										`date_dispatched`,
										`program`,
										`sample_type`,
										`clinician_name`,
										`no_of_dbs_spots`,
										`infant_feeding`,
										`prohilaxis`,
										`prophilaxis_weeks`
										)
									VALUES(	
											'$sample_auto_id',
											'$patient_auto_id',
											'$test_req_auto_id',
											'".date('Y-m-d', strtotime($date_coll[$key]))."',
											'".$date_sent[$key]."',
											'1',
											'1',
											'$clinician[$key]',
											'$spots[$key]',
											'$infant_feeding[$key]',
											'$infant_prophilaxis[$key]',
											'$prophilaxis_weeks[$key]'
										)
								");

				$reasons = explode(",", $test_reason[$key]);

				foreach ($reasons as $key_r => $value_r) {
				
					$this->db->query("INSERT INTO `sample_test_requisition_reason`
										(
											`id`,
											`sample_id`,
											`reason_id`
										)
										VALUES(
											'$reason_auto_id',
											'$sample_auto_id',
											'$value_r'
										)

									");
					$reason_auto_id++;
				}
				$patient_auto_id++;
				$sample_auto_id++;
				$infant_auto_id++;
			}

			if ($this->db->trans_status() === FALSE || $error){
				    $this->db->trans_rollback();
				}
				else{
				    $this->db->trans_commit();
				}
		}

	}

	public function samples(){		

		$this->view_data['content_view'] 	= 	"eid/samples_view";
		$this->view_data['title'] 			= 	"EID | Samples";	
		$this->view_data['menu_select']		= 	array(1,1);
		$this->view_data['breadcrumbs'][2]	=	array(
			"title" 	=>	"Samples",
			"link"		=>	base_url()."eid/requisition/samples",
			"class"		=>	"active"
			);

		$this -> template($this->view_data);
	}

	public function facility_consumption(){	

		$this->view_data['content_view'] 	= 	"eid/fac_consumption_view";
		$this->view_data['title'] 			= 	"EID | Facility Consumption";		
		$this->view_data['menu_select']		= 	array(1,2);
		$this->view_data['breadcrumbs'][2]	=	array(
			"title" 	=>	"Facility Consumption",
			"link"		=>	base_url()."eid/requisition/facility_consumption",
			"class"		=>	"active"
			);
		
		$this -> template($this->view_data);
	}

}