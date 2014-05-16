<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class worksheet extends MY_Controller {

	public function __construct(){

		$this->view_data['sidebar'] 		= "eid_sidebar";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));
		
	}

	public function index(){
		$this->cobas();
	}

	public function cobas(){
		$this->view_data['content_view'] 	= "eid/cobas_view";		
		$this->view_data['title'] 			= "COBAS | Worksheet";
		
		$this -> template($this->view_data);
	}
	
	public function abbott(){
		$this->view_data['content_view'] 	= "eid/abbott_view";
		$this->view_data['title'] 			= "ABBOTT | Worksheet";
		
		$this->template($this->view_data);
	}

}