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
		$this->view_data['program']  = 1;
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
		
		$start_date = date('Y-m-d',strtotime($_POST['all_start_date']));
		$end_date = date('Y-m-d',strtotime($_POST['all_end_date']));
		$format = $_POST['all_type'];//pdf or excel
		//get all samples between two dates 
		$this->view_data['all_samples'] = $this->reports_model->all_samples_m($start_date,$end_date);
				
		if($format == 1){//all samples for excel 
			$this->view_data['format'] = $format."/0";			
			// $worksheet["column_data"]	=	$col_data;
			// $worksheet["row_data"]		=	$row_data;
		}else if($format == 2){//all samples for pdf
			$this->view_data['format'] = $format."/0";
		}else{
			
		}
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
	
	
	
	public function download_report($format,$type,$start_date,$end_date){
		$this->load->module("utils/report_format_download");
		$row_data = array();
		if($format == 1 && $type == 0){//excel and all samples
			//echo "Excel".$format;
			//echo "Type".$type;
		//die;
			$worksheet["doc_creator"] 	= $this->session->userdata("username");
			$worksheet["doc_title"] 	= $this->session->userdata("username");
			$worksheet["file_name"] 	= "EID/LIMS_Report_(".$this->session->userdata("username").").xls";
			//get all samples
			$all_samples = $this->reports_model->all_samples_m($start_date,$end_date);
			//excel worksheet styling
			//header
			$row_data[0] = array("Sample ID","Testing Lab","Region", "District", "Facility","Sex","DOB","Age","Infant Propholaxyis", "Date Collected","Blood Spots","Received Status","Rejected Reason or Repeat Reason","Status of Mother", "PMTCT Intervention", "Breast Feeding", "Entry Point", "Date of Receving", "Date of Testing", "Date of Dispatch", "Test Result");      
			//content
			foreach ($all_samples as $key => $value) {
				$age = date('Y') - $value["dob"];
				$row_data[$key+1][0] 	=	$value["sample_id"]; 
				//$row_data[$key+1][1] 	=	$value[""]; 
				$row_data[$key+1][2] 	=	$value["region_name"]; 
				$row_data[$key+1][3] 	=	$value["district_name"]; 
				$row_data[$key+1][5] 	=	$value["facility_name"];
				$row_data[$key+1][6] 	=	$value["gender"]; 
				$row_data[$key+1][7] 	=	$value["dob"]; 
				$row_data[$key+1][8] 	=	$age; 
				$row_data[$key+1][9] 	=	$value["propholaxis"]; 
				$row_data[$key+1][10] 	=	$value["date_collected"]; 
				$row_data[$key+1][11] 	=	$value["dbs_spots"]; 
				$row_data[$key+1][12] 	=	$value["acceptance_status"]; 
				// $row_data[$key+1][13] 	=	$value[" "]; 
				// $row_data[$key+1][14] 	=	$value[""];
				// $row_data[$key+1][15] 	=	$value[""];
				// $row_data[$key+1][16] 	=	$value[""];
				// $row_data[$key+1][17] 	=	$value[""];
				// $row_data[$key+1][18] 	=	$value[""];
				// $row_data[$key+1][19] 	=	$value[""];
				$row_data[$key+1][20] 	=	$value["date_tested"];
				$row_data[$key+1][21] 	=	$value["dispatch"];
				$row_data[$key+1][22] 	=	$value["test_result"];  
			}
			$worksheet['row_data'] = $row_data; 
			
			$this->report_format_download->excel_worksheet($worksheet);
		}else if($format == 2 && $type == 0){//pdf and all samples
			$this->load->view('pdf_report');
		}else if($type == 1 && $type == 1){//excel and reports by region
			
		}else if($type == 1 && $type == 1){//pdf and reports by region
			
		}else{}
		//$this->load->view("download_report");
	}
	
	
	
}