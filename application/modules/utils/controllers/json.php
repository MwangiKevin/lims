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
		$this->write_facilities();
		$this->write_test_reasons();
		$this->write_infant_feeding();
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
	* @job = writes facilities info
	*/
	public function write_infant_feeding(){

		$fdng_assoc	=	$this->json_model->infant_feeding();
		$fdng_array  =	array();

		foreach ($fdng_assoc as $key => $value) {
			$fdng_array[$key] = array(
										"id" 	=> $value["id"],
										"name" 	=> $value["name"],
										"value" => $value["id"],
										"text" 	=> $value["name"]."-".$value["desc"]
								);
		}
		$infant_feeding = 	json_encode($fdng_array);

		$p 	=	$this->path."infant_feeding.json";

		file_put_contents($p, $infant_feeding);

		echo "Infant Feeding Written <br/> ";
	}
	/**
	* @job = writes test reason info
	*/
	public function write_test_reasons(){

		$assoc	=	$this->json_model->test_reasons();
		$eid_reasons  =	array();
		$vl_reasons  =	array();

		foreach ($assoc as $key => $value) {
			if($value["eid"]==1){
			$eid_reasons[] = array(
										"id" 	=> $value["id"],
										"name" 	=> $value["desc"],
										"value" => $value["id"],
										"text" 	=> $value["desc"]
								);
			}
		}

		foreach ($assoc as $key => $value) {
			if($value["vl"]==1){
			$vl_reasons[] = array(
										"id" 	=> $value["id"],
										"name" 	=> $value["desc"],
										"value" => $value["id"],
										"text" 	=> $value["desc"]
								);
			}
		}

		$eid_test_reasons 	= 	json_encode($eid_reasons);
		$vl_test_reasons 	= 	json_encode($vl_reasons);

		$p_eid 	=	$this->path."test_reasons_eid.json";
		$p_vl 	=	$this->path."test_reasons_vl.json";

		file_put_contents($p_eid, $eid_test_reasons);
		file_put_contents($p_vl, $vl_test_reasons);

		echo "Test reasons Written <br/> ";
	}



/**
* @section = reader functions
*/
	/**
	* @job = reads facilities info into an array
	*/
	public function read_facilities(){

	}

	/**
	* @job = reads an array value in json 
	* var 	$file  	= json file [without the extension]
	*		$id 	= uses this to find the file
	*/
	public function find_in_json($file, $id){

		$output = array();

		$string = file_get_contents($this->path."$file.json");
		$json_a = json_decode($string, true);

		foreach($json_a as $key => $value){
			if ((int) $value["id"] = (int) $id){
				$output = $value;
			}
		}

		return $output;
	}

}