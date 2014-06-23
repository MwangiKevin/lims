<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class vl extends MY_Controller {

	public function __construct(){
		$this->view_data['content_view'] 	= "vl/home_page_view";
		//$this->view_data['sidebar'] 		= "eid_sidebar";
		$this->view_data['title'] 			= "Dashboard";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));
	}
	
	
	public function index(){
		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"vl/home_page_view";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"Viral Load | Dashboard";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Viral Load|Home",
																	"link"		=>	base_url()."vl/home_page_view",
																	"class"		=>	"active"
																	)
												);
		$this->dashboard();
	}
	public function dashboard(){		
		
		$this -> template($this->view_data);
	}	
}
?>