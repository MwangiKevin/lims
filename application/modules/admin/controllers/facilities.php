<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class facilities extends MY_Controller {

	public function __construct(){
		$this->login_reroute(array(1));

		$this->view_data['content_view'] 	= 	"admin/facilities_details_view";
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID | Dashboard";
		$this->view_data['filter']			=	false;
		//$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['menu_select']		= 	array(0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."admin/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Facilities",
																	"link"		=>	base_url()."admin/facilities",
																	"class"		=>	"active"
																	)
												);
	}

	public function index(){

		$this->dashboard();
	}

	public function dashboard(){		
		
		$this -> template($this->view_data);
	}

    public function facilities_registration(){	
        $this->view_data['content_view'] 	= 	"admin/facilities_registration_view";
		
		$this -> template($this->view_data);
	}
}