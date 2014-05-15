<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class eid extends MY_Controller {

	public function __construct(){

		$this->view_data['content_view'] 	= "eid/dashboard_view";
		$this->view_data['sidebar'] 		= "eid_sidebar";
		$this->view_data['title'] 			= "Dashboard";
		$this->view_data['filter']			=	false;
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));
		
	}

	public function index(){
		$this->dashboard();
	}

	public function dashboard(){		
		
		$this -> template($this->view_data);
	}


}