<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class results extends MY_Controller {

	public $results_array = array();

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));


		$this->load->module("upload/upload");

		$this->view_data['content_view'] 	= 	"eid/update_results";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID | Results";
		$this->view_data['filter']			=	false;
		
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"EID";
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array("dropzone")));		
		$this->view_data['menu_select']		= 	array(3,0);
		$this->view_data['breadcrumbs'] 	=	array(
			0 	=>	array(
				"title" 	=>	"Home",
				"link"		=>	base_url()."eid/",
				"class"		=>	""
				),
			1 	=>	array(
				"title" 	=>	"Results",
				"link"		=>	base_url()."eid/results",
				"class"		=>	"active"
				),
			2 	=>	array(
				"title" 	=>	"Update",
				"link"		=>	base_url()."eid/results/update",
				"class"		=>	"active"
				)
			);

		$this->view_data['program']  = 1;

	}

	public function index(){

		$this->update();
	}	

	public function update(){
		
		$this -> template($this->view_data);
	}

	public function dispatch(){	

		$this->view_data['menu_select']		= 	array(3,1);
		$this->view_data['breadcrumbs'] 	=	array(
			0 	=>	array(
				"title" 	=>	"Home",
				"link"		=>	base_url()."eid/",
				"class"		=>	""
				),
			1 	=>	array(
				"title" 	=>	"Results",
				"link"		=>	base_url()."eid/results",
				"class"		=>	"active"
				),
			2 	=>	array(
				"title" 	=>	"Dispatch",
				"link"		=>	base_url()."eid/results/dispatch",
				"class"		=>	"active"
				)
			);		
		$this -> template($this->view_data);
	}

	public function view(){		
		
		$this->view_data['menu_select']		= 	array(3,2);
		$this->view_data['breadcrumbs'] 	=	array(
			0 	=>	array(
				"title" 	=>	"Home",
				"link"		=>	base_url()."eid/",
				"class"		=>	""
				),
			1 	=>	array(
				"title" 	=>	"Results",
				"link"		=>	base_url()."eid/results",
				"class"		=>	"active"
				),
			2 	=>	array(
				"title" 	=>	"View",
				"link"		=>	base_url()."eid/results/view",
				"class"		=>	"active"
				)
			);
		$this -> template($this->view_data);
	}
	
	public function update_results()
	{
		$this->load->view("update_results_oscar");
		
	}

	public function upload_file(){
		//print_r($_FILES);

		$this->login_reroute(array(2)); 


		if($_FILES['file']){
			if(strtolower(substr($_FILES['file']['name'], -3)) == "txt"){
				$this->results_array = $this->read_abbott($this->upload->read_file_array($_FILES['file']['tmp_name'],"txt"));
				$this->save_results($this->results_array);

			}elseif(strtolower(substr($_FILES['file']['name'], -3)) == "csv"){
				$this->results_array = $this->read_cobas($this->upload->read_file_array($_FILES['file']['tmp_name'],"csv"));				
				$this->save_results($this->results_array);
			}else{
			}
		}

		//print_r($this->results_array);

	}

	private function read_abbott($abbot_array){

		// print_r($abbot_array);

		if($abbot_array[0][0]=="FILE SIGNATURE"){

			$completed_time 							= $abbot_array[6][1];
			$operator									= $abbot_array[14][1];
			$samp_prep_lot_no							= $abbot_array[15][1];
			$samp_prep_exp_date							= $abbot_array[16][1];
			$samples =array();

			$samples_start_row=21;

			for ($i=0; $i <= 99; $i++) { 
				if($i!=48	&& 	$i!=49){

					$samples[$i]["completed_time"]			=	$completed_time;
					$samples[$i]["sample_id"] 				=	$abbot_array[$samples_start_row][1];
					$samples[$i]["sample_location"] 		=	$abbot_array[$samples_start_row][0];
					$samples[$i]["operator"]				=	$operator;
					$samples[$i]["samp_prep_lot_no"]		=	$samp_prep_lot_no;
					$samples[$i]["samp_prep_exp_date"]		=	$samp_prep_exp_date;

					if($abbot_array[$samples_start_row][5]=="Not Detected"){

						$samples[$i]["result"] 				= "N";
					}else if($abbot_array[$samples_start_row][5]=="HIV-1 Detected"){

						$samples[$i]["result"] 				= "P";

					}else if($abbot_array[$samples_start_row][5]=="HIV-2 Detected"){

						$samples[$i]["result"] 				= "P";
					}else {

						$samples[$i]["result"] 				= "F";
					}

					$samples_start_row++;
				}
			}

			// print_r($samples);

			return $samples;
		}
	}

	private function read_cobas($cobas_array){
		// print_r($cobas_array);

		if($cobas_array[0][0]=="Patient Name"){

			$samples 	=	array();

			for ($i=0; $i <= 23; $i++) { 

				$samples[$i]["sample_id"] 			=	$cobas_array[$i+2][2];
				$samples[$i]["sample_location"] 	=	$cobas_array[$i+2][35];
				$samples[$i]["completed_time"]		=	$cobas_array[$i+2][3];
				$samples[$i]["gen_lot_no"]			=	$cobas_array[$i+2][14];
				$samples[$i]["gen_lot_exp_date"]	=	$cobas_array[$i+2][15];

				if($cobas_array[$i+2][8]=="Target Not Detected"){

					$samples[$i]["result"] 				= "N";
				}else if((int)$cobas_array[$i+2][8]==1){

					$samples[$i]["result"] 				= "P";

				}else {

					$samples[$i]["result"] 				= "F";
				}
			}

			//print_r($samples);

			return $samples;
		}
	}

	private function save_results($res=array()){

		$from_date = date('Y-m-d', strtotime('today - 90 days'));

		$samples 	=	R::getAll("SELECT * FROM `sample` WHERE `timestamp` > '$from_date' ");

		$results_to_upload = array();

		foreach ($res as $key => $value) {
			foreach ($samples as $key1 => $value1) {
				if((int)$value1['id']==(int)$value['sample_id']){
					$results_to_upload[]=$value;
				}
			}
		}

		foreach ($results_to_upload as $key => $value) {
			$sql = "INSERT INTO `sample_test_run` (`sample_id`,`result`) VALUES('".$value["sample_id"]."','".$value["result"]."')";
			$this->db->query($sql);
		}

	}
}