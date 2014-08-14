<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class reports extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->login_reroute(array(2));

		$this->view_data['content_view'] 	= 	"reports/reports_view";
		$this->view_data['sidebar'] 		= 	"reports_sidebar";
		$this->view_data['title'] 			= 	"LIMS | Reports";

		$this->view_data['filter']			=	false;
		$this->load->model("reports_model");
		
		//skin and top left title
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']					=	"Reports";
		
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap','style-date-time')));		
		$this->view_data['menu_select']		= 	array(4);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."reports/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Reports",
																	"link"		=>	base_url()."reports/reports",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['program']  = 1;
	}

	public function index(){
		$this->reports();
	}
	//first page
	public function reports(){
		$this->view_data['all_samples'] = $this->reports_model->samples();
		$this -> template($this->view_data);
	}
	//eid page
	public function eid_report(){
		$this->view_data['content_view'] 	= 	"reports/eid_reports_view";
		$this->view_data['topleft_title']					=	"EID Reports";
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."reports/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"EID Report",
																	"link"		=>	base_url()."reports/eid_report",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['regions'] = $this->reports_model->regions();
		$this->view_data['districts'] = $this->reports_model->districts();
		$this->view_data['facility'] = $this->reports_model->facilities(); 
		$this->template($this->view_data);
	}
	//vl page
	public function vl_report(){
		$this->view_data['content_view'] 	= 	"reports/vl_reports_view";
		$this->view_data['topleft_title']					=	"VL Reports";
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."reports/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"VL Report",
																	"link"		=>	base_url()."reports/vl_report",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['regions'] = $this->reports_model->regions();
		$this->view_data['districts'] = $this->reports_model->districts();
		$this->view_data['facility'] = $this->reports_model->facilities(); 												
		$this->template($this->view_data);
	} 
	
	
	
	public function all_samples(){
		$this->view_data['content_view'] 		= "reports/all_samples_report";
		$this->view_data['title'] 				= "EID Reports | All Samples Report";		
		$this->view_data['menu_select']			= 	array(4);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"All Samples Report",
													"link"		=>	base_url()."reports/reports/all_samples",
													"class"		=>	"active"
													);
		
		$start_date = date('Y-m-d',strtotime($_POST['all_start_date']));
		$end_date = date('Y-m-d',strtotime($_POST['all_end_date']));
		$format = $_POST['all_type'];//pdf or excel	
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
		$this->view_data['all_samples'] = $this->reports_model->all_samples_m($start_date,$end_date);//get all samples between two dates 
		$this->template($this->view_data);
	}
	
	public function reports_by_area($area){
		$this->view_data['content_view'] 		= "reports/reports_by_area";
		$this->view_data['title'] 				= "EID | Geographical Reports";		
		$this->view_data['menu_select']			= 	array(4);
		$this->view_data['breadcrumbs'][2]		=	array(
													"title" 	=>	"Geographical Reports",
													"link"		=>	base_url()."reports/reports/reports_by_area",
													"class"		=>	"active"
													);
		if($area ==0 ){
		//report for a region	
			$region_val = $_POST['region'];
			$region = explode(".", $region_val);//get ID and name of a Region
			$start_date = date('Y-m-d',strtotime($_POST['region_start_date']));
			$end_date = date('Y-m-d',strtotime($_POST['region_end_date']));
			$format = $_POST['region_type'];
						
			$this->view_data['start_date'] = $_POST['region_start_date'];
			$this->view_data['end_date'] = $_POST['region_end_date'];
			$this->view_data['area_name'] = $region[1]; 
			$this->view_data['format'] = $format.'/1'; //format and type i.e all reports or limited by date
			$this->view_data['area'] = "Regional"; 
			$this->view_data['sample'] = $this->reports_model->reports_by_area(0,$region[1],$start_date,$end_date);//gets the samples from a particular region_ID
		}else if($area == 1){
		//report for a district
			$district_val = $_POST['district'];
			$district = explode(".", $district_val);//get the district ID and name
			$start_date = date('Y-m-d',strtotime($_POST['district_start_date']));
			$end_date = date('Y-m-d',strtotime($_POST['district_end_date']));
			$format = $_POST['district_type'];
			
			$this->view_data['start_date'] = $_POST['district_start_date']; 
			$this->view_data['end_date'] =  $_POST['district_end_date'];
			$this->view_data['area_name'] = $district[1]; 
			$this->view_data['format'] = $format.'/1';//format and type i.e all reports or limited by date
			$this->view_data['area'] = "District";  
			$this->view_data['sample'] = $this->reports_model->reports_by_area(1,$district[1],$start_date,$end_date);//gets the samples from a particular region_ID
		}else if($area == 2){
		//report for a facility
			$facility_val = $_POST['facility'];
			$facility = explode(".", $facility_val);			
			$start_date = date('Y-m-d',strtotime($_POST['facility_start_date']));
			$end_date = date('Y-m-d',strtotime($_POST['facility_end_date']));
			$format = $_POST['facility_type'];
			
			$this->view_data['start_date'] = $_POST['facility_start_date'];
			$this->view_data['end_date'] = $_POST['facility_end_date'];
			$this->view_data['area_name'] = $facility[1];
			$this->view_data['format'] = $format.'/1';//format and type i.e all reports or limited by date
			$this->view_data['area'] = "Facility";  
			$this->view_data['sample'] = $this->reports_model->reports_by_area(2,$facility[1],$start_date,$end_date);//gets the samples from a particular region_ID
		}else{}
		
															
	//determine region,district,facility  before getting the values use explode at fullstop or try catch											
		$this->template($this->view_data);
	}
	
	
	
	public function download_report($format,$type,$start_date,$end_date,$area_name,$area){
		$this->load->module("utils/report_format_download");
		$row_data = array();
		
		//EXCEL DOWNLOAD ALL SAMPLES NOT BY AREA
		if($format == 1 && $type == 0){
			$worksheet["doc_creator"] 	= $this->session->userdata("username");
			$worksheet["doc_title"] 	= $this->session->userdata("username");
			$worksheet["file_name"] 	= "(All_Regions,National)EID-Report_(".$this->session->userdata("username").").xls";
			//get all samples
			$all_samples = $this->reports_model->all_samples_m(date('Y-m-d',strtotime($start_date)),date('Y-m-d',strtotime($end_date)));
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
			///PDF DOWNLOAD ALL SAMPLES NOT BY AREA
		}else if($format == 2 && $type == 0){
			// echo "pdf";
			// die;
			$this->view_data['samples'] = $all_samples = $this->reports_model->all_samples_m(date('Y-m-d',strtotime($start_date)),date('Y-m-d',strtotime($end_date)));
			$this->view_data['area'] = $area;
			$this->view_data['location'] = "All Regions";
			$this->view_data['start_date'] = $start_date;
		 	$this->view_data['end_date'] = $end_date;
			$this->load->view('pdf_report',$this->view_data);
			//EXCEL DOWNLOAD REGIONS BY AREA
		}else if($format == 1 && $type == 1){
			// echo "report by area excel regions";
			$worksheet["doc_creator"] 	= $this->session->userdata("username");
			$worksheet["doc_title"] 	= $this->session->userdata("username");
			$worksheet["file_name"] 	= "EID(".$area_name.")LIMS_Report_(".$this->session->userdata("username").").xls";
			//get all samples
			$all_samples = $this->reports_model->all_samples_m(date('Y-m-d',strtotime($start_date)),date('Y-m-d',strtotime($end_date)));
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
			
			//PDF DOWNLOAD REGIONS BY AREA
		}else if($format == 2 && $type == 1){
			//echo "report by area pdf";
			$this->view_data['samples'] = $all_samples = $this->reports_model->all_samples_m(date('Y-m-d',strtotime($start_date)),date('Y-m-d',strtotime($end_date)));
			//$header_details = explode("%20", $area_name);
			$this->view_data['area'] = $area;
			$this->view_data['location'] = str_replace("%20", " ", $area_name);
			
			$this->load->view('pdf_report',$this->view_data);
		}else{}
		//$this->load->view("download_report");
	}

	public function download_national_report(){
		$this->load->module("utils/report_format_download");
		$download_format =  $_POST['all_type'];
		if($download_format == 1){
			//$samples = $this->reports_model->samples();
			$worksheet["doc_creator"] 	= $this->session->userdata("username");
			$worksheet["doc_title"] 	= $this->session->userdata("username");
			$worksheet["file_name"] 	= "EID(National)LIMS_Report_(".$this->session->userdata("username").").xls";
			//get all samples
			$all_samples  = $this->reports_model->samples();
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
		}else if($download_format == 2){
			//$samples = $this->reports_model->samples();
			$this->view_data['samples']  = $this->reports_model->samples();
			$this->view_data['area'] = "National";
			$this->view_data['location'] = "All Regions";
			$this->load->view('pdf_report',$this->view_data);
			
		}else{}
	}
	public function send_mail(){
		$this->load->view("send_mail_view");
	}
	
	
}