<?php

class Calendar extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['contentView']="calendar_v";
		$this->template($data);
	}

	public function template($data) {
		$data['show_menu'] = 0;
		$data['show_sidemenu'] = 0;
		$this -> load -> view('template_v',$data);
		//$this -> template -> index($data);
	}

}
