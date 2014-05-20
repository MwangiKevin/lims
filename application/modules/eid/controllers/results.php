<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class results extends MY_Controller {

	public function __construct(){

		$this->view_data['sidebar'] 		= "eid_sidebar";
		$this->view_data['content_view'] 	= "eid/update_worksheet_results_view";		
		$this->view_data['title'] 			= "Update Worksheet Results";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('style-bootstap')));
		
	}

	public function index(){
		$this->update();
	}

	public function update(){
		$this -> template($this->view_data);
	}
}