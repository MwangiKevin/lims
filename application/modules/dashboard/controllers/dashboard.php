<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class dashboard extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->view_data['content_view'] 	= 	"dashboard/dashboard";
		$this->view_data['sidebar'] 		= 	"main_sidebar";
		$this->view_data['title'] 			= 	"Dashboard";
		$this->view_data['filter']			=	false;

		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"Admin";

		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap','highcharts')));		
		$this->view_data['menu_select']		= 	"side_dashboard";
		$this->view_data['submenu_select']	= 	"";
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."dashboard",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Dashboard",
																	"link"		=>	base_url()."dashboard",
																	"class"		=>	"active"
																	)
												);
		$this->load->model("dashboard_model");
	}

	public function index(){

		$this -> load_dashboard(0,$this->view_data);
	}

	public function load_dashboard($program=0, $data=array()){

		$data['program'] 			= 	$program;
		$this -> template($data);
	}


}