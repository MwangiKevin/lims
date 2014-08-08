<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class reports extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"eid/reports_view";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID | Reports";

		$this->view_data['filter']			=	false;
		$this->load->model("reports_model");
		
		//skin and top left title
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']					=	"EID";
		
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap','style-date-time')));		
		$this->view_data['menu_select']		= 	array(4);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Reports",
																	"link"		=>	base_url()."eid/reports",
																	"class"		=>	"active"
																	)
												);
	}

	public function index(){
		$this->reports();
	}
	
	public function reports(){
		$this->view_data['regions'] = $this->reports_model->regions();
		$this->view_data['districts'] = $this->reports_model->districts();
		$this->view_data['facility'] = $this->reports_model->facilities(); 
		$this -> template($this->view_data);
	}
	
	
	
	public function all_samples(){
		$this->view_data['content_view'] 		= "eid/all_samples_report";
		$this->view_data['title'] 				= "EID | All Samples Report";		
		$this->view_data['menu_select']			= 	array(4);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"All Samples Report",
													"link"		=>	base_url()."eid/reports/all_samples",
													"class"		=>	"active"
													);
		
		$start_date = $_POST['all_start_date'];
		$end_date = $_POST['all_end_date'];
		
		$this->view_data['start_date'] = $_POST['all_start_date'];
		$this->view_data['end_date'] = $_POST['all_end_date'];
		//get the tested samples for a certain range
		//$this->view_data['sample'] = $this->reports_model->all_samples_m($start_date,$end_date);
		
		
		$this->template($this->view_data);
	}
	
	public function reports_by_area($type){
		$this->view_data['content_view'] 		= "eid/reports_by_area";
		$this->view_data['title'] 				= "EID | Geographical Reports";		
		$this->view_data['menu_select']			= 	array(4);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"Geographical Reports",
													"link"		=>	base_url()."eid/reports/reports_by_area",
													"class"		=>	"active"
													);
		
		if($type ==0 ){
		//report for a region	
			$region_val = $_POST['region'];
			$region = explode(".", $region_val);
			$start_date = $_POST['region_start_date'];
			$end_date = $_POST['region_end_date'];
						
			$this->view_data['start_date'] = $_POST['region_start_date'];
			$this->view_data['end_date'] = $_POST['region_end_date'];
			$this->view_data['area_name'] = $region[1]; 
			//$this->view_data['sample'] = $this->reports_model->reports_by_area($region[0],$start_date,$end_date);//gets the samples from a particular region_ID
		}else if($type == 1){
		//report for a district
			$district_val = $_POST['district'];
			$district = explode(".", $district_val);
			$start_date = $_POST['district_start_date'];
			$end_date = $_POST['district_end_date'];
			
			$this->view_data['start_date'] = $_POST['district_start_date']; 
			$this->view_data['end_date'] =  $_POST['district_end_date'];
			$this->view_data['area_name'] = $district[1]; 
			
			//$this->view_data['sample'] = $this->reports_model->reports_by_area($district[0],$start_date,$end_date);//gets the samples from a particular region_ID
		}else if($type == 2){
		//report for a facility
			$facility_val = $_POST['facility'];
			$facility = explode(".", $facility_val);			
			$start_date = $_POST['facility_start_date'];
			$end_date = $_POST['facility_end_date'];
			
			$this->view_data['start_date'] = $_POST['facility_start_date'];
			$this->view_data['end_date'] = $_POST['facility_end_date'];
			$this->view_data['area_name'] = $facility[1];
			
			//$this->view_data['sample'] = $this->reports_model->reports_by_area($facility[0],$start_date,$end_date);//gets the samples from a particular region_ID
		}else{}
		
															
	//determine region,district,facility  before getting the values use explode at fullstop or try catch											
		$this->template($this->view_data);
	}
	
	
	
	public function download_report(){
		$this->load->view("download_report");
	}
	
	
	
}