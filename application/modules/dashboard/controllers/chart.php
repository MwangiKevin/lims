<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class chart extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model("dashboard_model");
	}

	public function testing_trends(){
		echo json_encode($this->dashboard_model->testing_trends());
	}

	public function tat($program = 0){
		echo  json_encode($this->dashboard_model->tat($program));

	}

	public function summary($type){
		
		echo  json_encode($this->dashboard_model->summary($type));
	}

}