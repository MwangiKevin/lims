<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Backup extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['content_view'] = "backup/backup_v";
		$data['title'] = "Dashboard | System Backup";
		$this -> template($data);
	}

	public function backup_app() {
		$user = "Marete";
		$project_name = "platform_rb";
		$source = $_SERVER['DOCUMENT_ROOT'] . "/" . $project_name . "/";
		$root_label = explode("\\", $_SERVER['WINDIR']);

		$destination = $root_label[0] . "\\Users\\" . $user . "\\Desktop\\" . $project_name . ".zip";

		if (!extension_loaded('zip') || !file_exists($source)) {
			return false;
		}
		$zip = new ZipArchive();
		if (!$zip -> open($destination, ZIPARCHIVE::CREATE)) {
			return false;
		}
		$source = str_replace('\\', '/', realpath($source));
		if (is_dir($source) === true) {
			$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
			foreach ($files as $file) {
				$file = str_replace('\\', '/', $file);
				// Ignore "." and ".." folders
				if (in_array(substr($file, strrpos($file, '/') + 1), array('.', '..')))
					continue;
				$file = realpath($file);
				if (is_dir($file) === true) {
					$zip -> addEmptyDir(str_replace($source . '/', '', $file . '/'));
				} else if (is_file($file) === true) {
					$zip -> addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
				}
			}
		} else if (is_file($source) === true) {
			$zip -> addFromString(basename($source), file_get_contents($source));
		}
		return $zip -> close();
	}

	public function backup_db() {
		$backup_folder = "backup_db";
		$inner_file = "webadt.sql";
		$outer_file = "webadt-" . date('d-M-Y h-i-sa') . ".zip";
		$prefs = array('format' => 'zip', 'filename' => $inner_file, 'add_drop' => TRUE, 'add_insert' => TRUE, 'newline' => "\n");

		//Assign Folder location and filename
		$write_location = $backup_folder . "/" . $outer_file;
		// Load the DB utility class
		$this -> load -> dbutil();
		// Backup your entire database and assign it to a variable
		$db_backup = &$this -> dbutil -> backup($prefs);
		// Load the file helper and write the file to your server
		$this -> load -> helper('file');
		write_file($write_location, $db_backup);
		echo "Database Backup Succesful";
	}

	public function template($data) {
		$data['show_menu'] = 0;
		$data['show_sidemenu'] = 0;
		$this -> load -> module('template');
		$this -> template -> index($data);
	}

}
