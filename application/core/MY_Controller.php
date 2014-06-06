<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */

/*
* @package		core
* @author		Kevin MWangi 
* @email 		mwangikevinn@gmail.com
* @usage 		
*/

class  MY_Controller  extends  MX_Controller {

	protected $view_data = array();
	protected $em;

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Africa/Nairobi');
		$this->view_data	=  	array_merge($this->view_data,$this->load_libraries(array()));
		$this->em = $this->doctrine->em;
	}


	/*
	*
	*	Default function to load libraries
	*
	*		@$arr array to use to load files from assets
	*		@example array('dataTables','bootstrap')
	*
	*/

	public function load_libraries($arr){

		array_unshift($arr,"jquery","bootstrap","calendar_css_only","dataTables",'style','dataTables-bootstrap');

		$libs['js_files']				=	array();		
		$libs['css_files']				=	array();			
		$libs['js_plugin_files']		=	array();
		$libs['css_plugin_files']		=	array();

		$libs['js_theme_files']			=	array();

		$asset_path		=	$this->config->item('asset_path');

		$css_path		=	$this->config->item('asset_path');
		$js_path		=	$this->config->item('js_path');
		$plugin_path	=	$this->config->item('plugin_path');
		$sass_path		=	$this->config->item('sass_path');

		$all_css		=	$this->config->item('css_files');
		$all_js			=	$this->config->item('js_files');
		$all_plugin_css	=	$this->config->item('plugin_css_files');
		$all_plugin_js	=	$this->config->item('plugin_js_files');

		$all_theme_js	=	$this->config->item('js_theme_files');


		

		//load css
		foreach ($arr as $css) {
			foreach($all_css as $all){
				if($css==$all['title']){
					$libs['css_files']			=	array_merge($libs['css_files'],array($all['file']));
				}
			}
		}
		//load js
		foreach ($arr as $js) {
			foreach($all_js as $all){
				if($js==$all['title']){
					$libs['js_files']			=	array_merge($libs['js_files'],array($all['file']));
				}
			}
		}
		//load plugin css
		foreach ($arr as $css) {
			foreach($all_plugin_css as $all){
				if($css==$all['title']){
					$libs['css_plugin_files']	=	array_merge($libs['css_plugin_files'],array($all['file']));
				}
			}
		}
		//load plugin js
		foreach ($arr as $js) {
			foreach($all_plugin_js as $all){
				if($js==$all['title']){
					$libs['js_plugin_files']	=	array_merge($libs['js_plugin_files'],array($all['file']));

				}
			}
		}
		//load theme js
		foreach ($arr as $js) {
			foreach($all_theme_js as $all){
				if($js==$all['title']){
					$libs['js_theme_files']	=	array_merge($libs['js_theme_files'],array($all['file']));

				}
			}
		}	
		return 	$libs;
	}	


	/*
	*Default template function
	*
	*/

	protected function template($data) {
		$this -> load -> module('template');
		$this -> template ->load_template($data);
	}


	/*
	*
	*Use md5 and key to hash strings
	*
	*/
	
	protected function my_hash($data=null){

		$key = $this -> encrypt -> get_key();
		$encrypted_data = $key . $data;
		$data = md5($encrypted_data);
		return $data;
		
	}

	/*
	*Writes content to userlog
	*
	*/

	protected function write_log($user_id, $access_type) {
		$log = R::dispense($this->config->item("user_log_table"));
		$log -> user = $user_id;
		$log -> access_type = $access_type;
		$log -> timestamp = date('Y-m-d H:i:s');
		$log -> ip_address = $this -> input -> ip_address();
		$log -> agent = $this -> input -> user_agent();
		$log -> sess_data = json_encode($this->session->all_userdata()); 
		R::store($log);
	}

	/*
	* redirects to appropriate module depending on user login
	*
	*/
	public function module_after_login(){
		$user_type = 0;

		if($this-> session-> userdata('userGroupId')){
			echo $user_type 	=	$this-> session-> userdata('userGroupId');
		}

		if($user_type==0){
			//do nothing
		}elseif ($user_type==1) {
			redirect("admin");
		}elseif ($user_type==2) {
			redirect("eid");
		}
	}

	/*
	* provides access to specific modules to specific users
	*
	*/
	protected function login_reroute($users_type){
		$sess_login_status 	=	$this -> session -> userdata("login_status");
		$sess_user_type 	=	$this -> session -> userdata("userGroupId");

		$redirect_var="";
		$redir=true;

		foreach ($users_type as $user_type) {		
			if($sess_login_status && $sess_user_type==$user_type){
				$redirect_var="";
				$redir=false;
			}else if($sess_login_status){
				//redirect("home");
				$redirect_var="login";
			}else{
				//redirect("login");
				$redirect_var="login";
			}
		}
		if($redir){
			redirect($redirect_var);
		}
	}

	/*
	* logout
	*
	*/
	public function logout() {

		$this -> write_log($this -> session -> userdata("id"), "logout");
		$this -> session -> sess_destroy();
		redirect("login");

	}

}


