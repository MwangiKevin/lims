<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class navbar_item extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model("navbar_items_model");
	}

	public function batches($program=0){
		$data['batches'] = $this->navbar_items_model->batches($program=0);
		$this->load->view("nav_itm_batches_view",$data);
	}
	
	public function notifications($program=0){
		
	}
	public function messages($program=0){
		
	}

}