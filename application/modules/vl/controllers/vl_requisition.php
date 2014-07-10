<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class vl_requisition extends MY_Controller {

	public function __construct(){

		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"vl/requisition_view";
		$this->view_data['sidebar'] 		= 	"vl_sidebar";
		$this->view_data['title'] 			= 	"Viral Load | Requisition";
		$this->view_data['filter']			=	false;
		
		
		$this->view_data['b_color']			=	"skin-2";
		$this->view_data['topleft_title']	=	"Viral Load";
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(1,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Requisition",
																	"link"		=>	base_url()."vl/requisition",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Fill",
																	"link"		=>	base_url()."",
																	"class"		=>	"active"
																	)
												);

	}

	public function index(){

		$this->fill();
	}

	public function fill(){		
		
		$this -> template($this->view_data);
	}

	public function samples(){		

		$this->view_data['content_view'] 	= 	"vl/samples_view";
		$this->view_data['title'] 			= 	"Viral Load | Samples";	
		$this->view_data['menu_select']		= 	array(1,1);

		$this -> template($this->view_data);
	}

	// public function facility_consumption(){	
// 
		// $this->view_data['content_view'] 	= 	"eid/fac_consumption_view";
		// $this->view_data['title'] 			= 	"EID | Facility Consumption";		
		// $this->view_data['menu_select']		= 	array(1,2);
// 		
		// $this -> template($this->view_data);
	// }

}