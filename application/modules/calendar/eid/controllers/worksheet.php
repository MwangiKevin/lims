<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheet extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));

		$this->view_data['sidebar'] 		= "eid_sidebar";
		$this->view_data['filter']			=	false;
		$this->view_data['content_view'] 	= 	"eid/cobas_view";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID";
		
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"EID";
		$this->load->model("worksheets_model");
		
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
																	"title" 	=>	"COBAS Worksheet",
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
		$this->view_data['result'] = $this->worksheets_model->cobas_samples(1);
		$this->view_data['save_and_print_cobas'] = base_url()."eid/worksheet/cobas_print_worksheet";
		$this->view_data['breadcrumbs'][2]		=	array(
											"title" 	=>	"COBAS Worksheet",
											"link"		=>	base_url()."eid/worksheet/cobas",
											"class"		=>	"active"
											);
		
		// foreach($result	 as $res1){
			// $DBSNo = $res1['dbsNo'];
			// echo('No of blood spots '.$DBSNo);
		// }
		
		$this -> template($this->view_data);
	}
	
	public function abbott(){
		$this->view_data['content_view'] 		= "eid/abbott_view";
		$this->view_data['title'] 				= "EID | Worksheet | ABBOT";		
		$this->view_data['menu_select']			= 	array(2,1);
		$this->view_data['result'] = $this->worksheets_model->abbott_samples(1);
		$this->view_data['save_and_print_abbott'] = base_url()."eid/worksheet/abbott_print_worksheet";
		// $result = $this->worksheets_model->abbott_samples(1);
// 
		// print_r("Result = " .$result);
		// die;
		
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"ABOTT Worksheet",
													"link"		=>	base_url()."eid/worksheet/abbott",
													"class"		=>	"active"
													);
		
		$this->template($this->view_data);
	}
	public function history(){	

		$this->view_data['content_view'] 		= "eid/worksheet_history_view";
		$this->view_data['title'] 				= "EID | Worksheet | ABBOT";		
		$this->view_data['menu_select']			= 	array(2,2);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"Worksheet History",
													"link"		=>	base_url()."eid/worksheet/history",
													"class"		=>	"active"
													);
		
		$this->template($this->view_data);
	}
	
	public function cobas_print_worksheet(){
		$this->view_data['result'] = $this->worksheets_model->cobas_samples(1);			
		$this->load->view("cobas_rack_view",$this->view_data);
	}
	public function abbott_print_worksheet(){
		$this->view_data['result'] = $this->worksheets_model->abbott_samples(1);
		$this->load->view("abbott_rack_view",$this->view_data);
	}
	
}