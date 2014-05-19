<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheet extends MY_Controller {

	public function __construct(){

		$this->view_data['sidebar'] 		= "eid_sidebar";
		$this->view_data['filter']			=	false;
		$this->view_data['content_view'] 	= 	"eid/cobas_view";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(2,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Worksheet",
																	"link"		=>	base_url()."eid/worksheet/",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Worksheet",
																	"link"		=>	base_url()."eid/worksheet/cobas",
																	"class"		=>	"active"
																	)
												);
		
	}

	public function index(){
		$this->cobas();
	}

	public function cobas(){
		$this->view_data['content_view'] 	= "eid/cobas_view";		
		$this->view_data['title'] 			= "EID | Worksheet | COBAS";
		$this->view_data['menu_select']		= 	array(2,0);
		
		$this -> template($this->view_data);
	}
	
	public function abbott(){
		$this->view_data['content_view'] 		= "eid/abbott_view";
		$this->view_data['title'] 				= "EID | Worksheet | ABBOT";		
		$this->view_data['menu_select']			= 	array(2,1);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"Worksheet",
													"link"		=>	base_url()."eid/worksheet/abbott",
													"class"		=>	"active"
													);
		
		$this->template($this->view_data);
	}

}