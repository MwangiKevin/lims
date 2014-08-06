<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class stat extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model("stat_model");
	}

	public function lab($program=0){
		echo json_encode($this->stat_model->lab($program));
	}

	public function facility($program=0){
		echo json_encode($this->stat_model->facility($program));
	}

}