<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Survey extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['content_view'] = "survey/survey_v";
		$data['title'] = "Dashboard | System Backup";
		$this -> template($data);
	}

	public function template($data) {
		$data['show_menu'] = 0;
		$data['show_sidemenu'] = 0;
		$this -> load -> module('template');
		$this -> template -> index($data);
	}

}
