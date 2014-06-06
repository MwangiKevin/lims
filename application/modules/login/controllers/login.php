<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends MY_Controller {

	public $login_status = false;

	function __construct() {

		parent::__construct();

		$this	->	view_data['content_view'] 	= 	"login/login_v";
		$this	->	view_data['title'] 			= 	"LIMS | Login";
		$this	->	view_data['login_fail'] 	=	false;
		
	}

	public function index() {

		$this	->	module_after_login();
		$this	->	load 	->	view("login_v",$this->view_data);
	}
	
	/*
	* login details posted here
	*/
	public function process_credentials() {

		$username = $this -> input -> post("username", TRUE);
		$password = $this -> input -> post("password", TRUE);

		$this	->	view_data['login_fail'] 	=	!$this->authenticate_user($username, $password);

		$this	->	index();

	}

	/*
	* authenticates login credentials
	*/
	private function authenticate_user($username, $password) {

		$password 	= 	$this -> my_hash($password);

		$query		=	$this	->	em 	->	createQuery("	SELECT 
																	u
																FROM 	models\Entities\User u
															WHERE 	u.username 	=	:username 
															AND 	u.password 	=	:password 
													");

		$query	->	setParameter('username' ,$username);
		$query	->	setParameter('password' ,$password);

		$users = $query	->	getArrayResult();

		if (sizeof($users)>0){
			$this->set_session_data($users[0],$this->login_status = true);
			$this->module_after_login();
		}else{
			$this->login_status = false;
		}

		return $this->login_status;
	}

	/*
	* Set user login session data
	*/
	private function set_session_data($users = array(), $login_status){

		$session_data = array();
		$access_type = "login";
		$user_id = $users['id'];		

		//exclude password and activation data from session

		foreach ($users as $key => $user) {
			if (	$key != "password"	&&	$key != "activationClause"	) {
				$session_data[$key] = $user;
			}
		}

		$session_data['login_status'] 	= 	$login_status;

		$this -> session -> set_userdata($session_data);
		$this -> write_log($user_id, $access_type);

		print_r($this->session->all_userdata());

	}

}
