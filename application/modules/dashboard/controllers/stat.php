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

	public function batches($program=0){
		$data['batches'] = $this->stat_model->batches($program=0);
		$this->load->view("wdgt_batches_view",$data);
	}
	public function messages($program=0){
		$data['messages'] = $this->stat_model->messages($program=0);
		$this->load->view("wdgt_messages_view",$data);
	}
	public function notifications($program=0){
		$data['notifications'] = $this->stat_model->notifications($program=0);
		$this->load->view("wdgt_notifications_view",$data);
	}

}