<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class dashboard extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->login_reroute(array(2));	
	}

	public function index(){
		
	}

	public function load_dashboard($program){

	}




}