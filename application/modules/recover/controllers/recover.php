<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Recover extends MY_Controller {
	var $backup_dir = "./backup_db";
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['backup_files'] = $this -> checkdir();
		$data['content_view'] = "recover/recover_v";
		$data['title'] = "Dashboard | System Recovery";
		$this -> template($data);
	}

	public function checkdir() {
		$dir = $this -> backup_dir;
		$backup_files = array();
		$backup_headings = array('Filename', 'Options');
		$options = '<button class="btn btn-primary btn-sm recover" >Recover</button>';

		if (is_dir($dir)) {
			$files = scandir($dir, 1);
			foreach ($files as $object) {
				if ($object != "." && $object != "..") {
					$backup_files[] = $object;
				}
			}
		} else {
			mkdir($dir);
		}
		$this -> load -> module('table');
		return $this -> table -> load_table($backup_headings, $backup_files, $options);
	}

	public function start_recovery() {
		$file_name = $this -> input -> post("file_name", TRUE);
		$dir = $this -> backup_dir;
		$file_path = realpath($dir . "/" . $file_name);
		//$file_path=$this->uncompress_zip($file_path);
		$file_path="\"".$file_path."\"";

		$CI = &get_instance();
		$CI -> load -> database();
		$hostname = $CI -> db -> hostname;
		$username = $CI -> db -> username;
		$password = $CI -> db -> password;
		$current_db = $CI -> db -> database;
		$recovery_status = false;

		$this -> load -> dbutil();
		if ($this -> dbutil -> database_exists($current_db)) {
			$recovery_status = true;
			$command="cd ".$_SERVER['DOCUMENT_ROOT'];
			$command=str_replace("htdocs", "mysql/bin", $command);
			//exec($command);
			echo $command ='mysql -u ' . $username . ' -p ' . $password . ' ' . $current_db . ' < ' . $file_path;
			//exec($command);
		}
		return $recovery_status;
	}
	public function uncompress_zip($file_path){
		
	}

	public function template($data) {
		$data['show_menu'] = 0;
		$data['show_sidemenu'] = 0;
		$this -> load -> module('template');
		$this -> template -> index($data);
	}

}
