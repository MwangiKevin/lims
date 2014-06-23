<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
* @author Maestro
*/
class json extends MY_Controller {

	public $path;

	/**
	* @job =  Constructor
	*/
	function __construct() {
		parent::__construct();

		$this->load->model('json_model');

		$this->path 	=	"assets/json/";
	}

	/**
	* @Default function 
	*/
	public function index(){

	}

/**
* @section = writer functions
*/

	/**
	* @job = to be run periodically and in case of certain change in lookup tables in the db
	*/
	public function write_all_json(){

	}


	/**
	* @job = writes facilities info
	*/
	public function write_facilities(){

		$fac_assoc	=	$this->json_model->facilities();
		$fac_array  =	array();

		foreach ($fac_assoc as $key => $value) {
			$fac_array[$key] = array(
										"id" 	=> $value["id"],
										"name" 	=> $value["name"],
										"value" => $value["id"],
										"text" 	=> $value["name"]
								);
		}
		$facilities = 	json_encode($fac_array);

		$p 	=	$this->path."facilities.json";

		file_put_contents($p, $facilities);

		echo "Facilities Written <br/> ";
	}



/**
* @section = reader functions
*/
	/**
	* @job = reads facilities info into an array
	*/
	public function read_facilities(){

	}

}