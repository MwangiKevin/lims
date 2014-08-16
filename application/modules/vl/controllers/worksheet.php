<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheet extends MY_Controller {

	public function __construct(){
		$this->login_reroute(array(2));

		$this->view_data['sidebar'] 		= "vl_sidebar";
		$this->view_data['filter']			=	false;
		
		
		$this->view_data['b_color']			=	"skin-2";
		$this->view_data['topleft_title']	=	"Viral Load";
		
		$this->view_data['title'] 			= 	"Viral Load | Worksheet";
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));		
		$this->view_data['menu_select']		= 	array(2,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Worksheet",
																	"link"		=>	base_url()."vl/worksheet/",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['program']  = 2;
	}

	public function index(){
		$this->cobas();
	}

	public function cobas(){
		$this->view_data['content_view'] 	= "vl/cobas_worksheet";		
		$this->view_data['title'] 			= "Viral Load | Worksheet | COBAS";
		$this->view_data['menu_select']		= 	array(2,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Worksheet",
																	"link"		=>	base_url()."vl/worksheet/",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"COBAS Worksheet",
																	"link"		=>	base_url()."vl/worksheet/cobas_worksheet",
																	"class"		=>	"active"
																	)
												);
		
		
		$this -> template($this->view_data);
	}
	
	public function abbott(){
		$this->view_data['content_view'] 		= "vl/abbott_worksheet";
		$this->view_data['title'] 				= "Viral Load | Worksheet | ABBOT";		
		$this->view_data['menu_select']			= 	array(2,1);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"ABOTT Worksheet",
													"link"		=>	base_url()."vl/worksheet/abbott_worksheet",
													"class"		=>	"active"
													);
		
		$this->template($this->view_data);
	}
	public function history(){	

		$this->view_data['content_view'] 		= "vl/worksheet_history";
		$this->view_data['title'] 				= "VL | Worksheet";		
		$this->view_data['menu_select']			= 	array(2,2);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"Worksheet History",
													"link"		=>	base_url()."vl/worksheet/history",
													"class"		=>	"active"
													);
		
		$this->template($this->view_data);
	}
	
	public function print_worksheet($id=null){

	}
}