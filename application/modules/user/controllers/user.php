<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class User extends MY_Controller {

	var $select_variables = array("u.Name", "u.Email_Address", "u.Phone_Number", "al.level_name", "u1.Name as creator");
	var $user_headings = array('Full Name', 'Email Address', 'Phone Number', 'Access Level', 'Created By', 'Options');

	function __construct() {
		parent::__construct();
	}

	public function index($user_access_level = 1) {
		$data['tables'] = $this -> listing($user_access_level);
		$data['actual_page'] = "Manage Users";
		$data['content_view'] = "user/user_v";
		$data['title'] = "Dashboard | User";
		$this -> template($data);
	}

	public function listing($user_access_level) {
		$user_table = $this -> config -> item('user_table');
		$access_level_table = $this -> config -> item('access_level_table');
		$access_level_column = $this -> config -> item('access_level_column');
		$creator_column = $this -> config -> item('creator_column');
		$access_level_position_column = $this -> config -> item('access_level_position_column');
		$options = '<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#view">View</button>';

		$select_variables = $this -> select_variables;
		$user_headings = $this -> user_headings;
		$select_variables = implode($select_variables, ",");

		$sql = "SELECT $select_variables 
		        FROM $user_table u 
		        LEFT JOIN $access_level_table al ON al.id=u.$access_level_column
		        LEFT JOIN $user_table u1 ON u.$creator_column=u1.id
		        WHERE al.$access_level_position_column > :a";

		$table_data = R::getAll($sql, array(':a' => $user_access_level));
		$this -> load -> module('table');
		return $this -> table -> load_table($user_headings, $table_data, $options);
	}

	public function template($data) {
		$data['show_menu'] = 1;
		$data['show_sidemenu'] = 1;
		$this -> load -> module('template');
		$this -> template -> index($data);
	}

}
