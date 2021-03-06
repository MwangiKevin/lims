<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class lab_consumption extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));
		
		$this->view_data['content_view'] 	= 	"template/blank";
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID | Lab Consumption";
		$this->view_data['filter']			=	false;
		
		
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"EID";
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(6);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Lab Consumption",
																	"link"		=>	base_url()."eid/lab_consumption ",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['program']  = 1;

	}

	public function index(){

		$this->monthly();
	}

	public function monthly(){		
		$this->view_data['content_view'] 	= 	"template/blank_monthly_reporting";
		$this->view_data['menu_select']		= 	array(5,0);
		$this->view_data['breadcrumbs'][2] =	array(
														"title" 	=>	"Monthly Reports",
														"link"		=>	base_url()."eid/tasks/monthly",
														"class"		=>	"active"
														);
		
		$this -> template($this->view_data);
	}

	public function reports(){		
		$this->view_data['content_view'] 	= 	"template/blank_reports";
		$this->view_data['menu_select']		= 	array(5,1);
		$this->view_data['breadcrumbs'][2] =	array(
														"title" 	=>	"Monthly Reports",
														"link"		=>	base_url()."eid/tasks/reports",
														"class"		=>	"active"
														);
		
		$this -> template($this->view_data);
	}

	public function received_consumables(){		
		$this->view_data['content_view'] 	= 	"template/blank_received_consumables";
		$this->view_data['menu_select']		= 	array(5,2);
		$this->view_data['breadcrumbs'][2] =	array(
														"title" 	=>	"Monthly Reports",
														"link"		=>	base_url()."eid/tasks/received_consumables",
														"class"		=>	"active"
														);
		
		$this -> template($this->view_data);
	}

	public function inventory(){		
		$this->view_data['content_view'] 	= 	"template/blank_inventory";
		$this->view_data['menu_select']		= 	array(5,3);
		$this->view_data['breadcrumbs'][2] =	array(
														"title" 	=>	"Monthly Reports",
														"link"		=>	base_url()."eid/tasks/inventory",
														"class"		=>	"active"
														);
		
		$this -> template($this->view_data);
	}


}