<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class results extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"template/blank";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID | Results";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(3,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."eid/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Update",
																	"link"		=>	base_url()."eid/results/update",
																	"class"		=>	"active"
																	)
												);

	}

	public function index(){

		$this->update();
	}	

	public function update(){
		
		$this -> template($this->view_data);
	}

	public function dispatch(){	

		$this->view_data['menu_select']		= 	array(3,1);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."eid/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Dispatch",
																	"link"		=>	base_url()."eid/results/dispatch",
																	"class"		=>	"active"
																	)
												);		
		$this -> template($this->view_data);
	}

	public function view(){		
		
		$this->view_data['menu_select']		= 	array(3,2);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."eid/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"View",
																	"link"		=>	base_url()."eid/results/view",
																	"class"		=>	"active"
																	)
												);
		$this -> template($this->view_data);
	}


}