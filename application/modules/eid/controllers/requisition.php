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
		//$this->view_data['menu_select']		= 	array(1,0);
		$this->view_data['menu_select']		= 	"side_dashboard";
		$this->view_data['submenu_select']	= 	"none";
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
		print_r($this->input->post());
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