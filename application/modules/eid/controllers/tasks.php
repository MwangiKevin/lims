<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class tasks extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"template/blank";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID | Tasks";
		$this->view_data['filter']			=	false;
		
		
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"EID";
		
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(5,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Tasks",
																	"link"		=>	base_url()."eid/tasks",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['program']  = 1;

	}

	public function index(){

		$this->pending();
	}

	public function pending(){	

		$this->view_data['menu_select']		= 	array(4,0);
		$this->view_data['breadcrumbs'][2] =	array(
														"title" 	=>	"Pending",
														"link"		=>	base_url()."eid/tasks/pending",
														"class"		=>	"active"
														);

		$this -> template($this->view_data);
	}	

	public function completed(){

		$this->view_data['menu_select']		= 	array(4,1);
		$this->view_data['breadcrumbs'][2] =	array(
														"title" 	=>	"Completed",
														"link"		=>	base_url()."eid/tasks/completed",
														"class"		=>	"active"
														);		
		
		$this -> template($this->view_data);
	}


}