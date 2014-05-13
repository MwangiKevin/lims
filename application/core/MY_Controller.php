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

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Africa/Nairobi');
		$this->view_data	=  	array_merge($this->view_data,$this->load_libraries(array()));
	}

	public function load_libraries($arr){

		array_unshift($arr, "jquery","bootstrap","nascop","site","calendar_css_only","dataTables",'style');
				
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
	protected function template($data) {
		$this -> load -> module('template');
		$this -> template ->load_template($data);
	}
	protected function hash($data){
		$key = $this -> encrypt -> get_key();
		$encrypted_data = $key . $data;
		$data = md5($encrypted_data);
		return $data;
	}

}


