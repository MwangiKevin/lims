<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class reports extends MY_Controller {

	public function __construct(){
		$this->login_reroute(array(1));

		$this->view_data['content_view'] 	= 	"reports/reports_view";
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID | Dashboard";
		$this->view_data['filter']			=	false;


		$this->view_data['b_color']			=	"skin-1";
		$this->view_data['topleft_title']	=	"Admin";
		
		$this->load->model("reports_model");

		$this->view_data['menu_select']		= 	"side_reports";
		$this->view_data['submenu_select']	= 	"";

		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['menu_select']		= 	array(0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."admin/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Dashboard",
																	"link"		=>	base_url()."admin/reports",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['program']  = 2;
	}

	public function index(){
		$this->view_data['all_samples'] = $this->reports_model->samples();
		$this -> template($this->view_data);
	}

	public function dashboard(){		
		
	}


}