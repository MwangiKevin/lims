<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class results extends MY_Controller {

	public function __construct(){

		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"vl/update_results";
		$this->view_data['sidebar'] 		= 	"vl_sidebar";
		$this->view_data['title'] 			= 	"Viral Load | Update Results";
		$this->view_data['filter']			=	false;
		
		
		$this->view_data['b_color']			=	"skin-2";
		$this->view_data['topleft_title']	=	"Viral Load";
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(3,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."vl/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Update",
																	"link"		=>	base_url()."vl/results/update",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['program']  = 2;

	}

	public function index(){

		$this->update();
	}	

	public function update(){
		$this->view_data['content_view'] 	= 	"vl/update_results";
		$this->view_data['sidebar'] 		= 	"vl_sidebar";
		$this->view_data['title'] 			= 	"Viral Load | Update Results";
		$this -> template($this->view_data);
	}

	public function dispatch(){	
		$this->view_data['content_view'] 	= 	"vl/dispatch";
		$this->view_data['menu_select']		= 	array(3,1);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."vl/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Dispatch",
																	"link"		=>	base_url()."vl/results/dispatch",
																	"class"		=>	"active"
																	)
												);		
		$this -> template($this->view_data);
	}

	public function view(){		
		$this->view_data['content_view'] 	= 	"vl/view_worksheet";
		$this->view_data['menu_select']		= 	array(3,2);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."vl/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"View",
																	"link"		=>	base_url()."vl/results/view",
																	"class"		=>	"active"
																	)
												);
		$this -> template($this->view_data);
	}
}