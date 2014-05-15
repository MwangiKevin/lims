<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view_data['content_view'] = "login/login_v";
		$this->view_data['title'] = "LIMS | Login";
		$this -> load->view("login_v",$this->view_data);
	}
	
	/*
	*
	*/
	public function process_credentials() {

		$this->form_validation->set_rules("username","");

		$$this->data['validated'] = $this -> form_validation -> run();
		if ($$this->data['validated']) {
			$username = $this -> input -> post("username", TRUE);
			$password = $this -> input -> post("password", TRUE);
			$this -> authenticate_user($username, $password);
		} else {
			$this -> index();
		}
		
	}

}
