<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

/*
* @package		utils
* @author		Kevin MWangi 
* @email 		mwangikevinn@gmail.com
* @usage 		
*/
class minify_util extends MY_Controller{

	public $js_files 	= 	array(
									""
										);
	public $css_files 	= 	array(									
									"C://wamp/www/lims/assets/sass_assets/sass/stylesheets/styles.css"

										);

	public function __construct(){

		$this->load->driver('minify');

	}

	public function do_minify(){

	}
}