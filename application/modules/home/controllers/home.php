<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['content_view'] = "home/home_v";
		$data['title'] = "Dashboard | System Home";
		$this -> template($data);
	}

	public function template($data) {
		$data['show_menu'] =1;
		$data['show_sidemenu']=1;
		$this -> load -> module('template');
		$this -> template -> index($data);
	}

}
