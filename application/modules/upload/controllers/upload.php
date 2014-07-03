<?php
/**
* @author Maestro
*/
class Upload extends MY_Controller {

	public $message 		= null;
	public $uploader 		= null;
	public $upload_status 	= false;

	function __construct() {
		parent::__construct();
		$this -> load -> library('PHPexcel');
		//ini_set('memory_size', '2048M');
	}


	/**
	* @job => read  file and return an array 
	*/
	public function read_file_array($file_dir, $file_extension = null){

		$row = 0;
		$sheet_data = array();
		$seperator = null;

		if($file_extension=="txt"){			
			$seperator = "\t";
		}else if($file_extension=="csv"){			
			$seperator = ",";
		}

		if (($handle = fopen("$file_dir", "r")) !== FALSE && $seperator != null) {
			while (($row_data = fgetcsv($handle, 1000, $seperator )) !== FALSE) {
				$sheet_data[$row]=$row_data;
				$row++;
			}

		}
		return $sheet_data;
	}


}
