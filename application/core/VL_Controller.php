<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class EID_Controller extends MY_Controller {

	public function __construct(){
		$this->view_data['content_view'] 	= "dashboard/dashboard";
		$this->view_data['title'] 			= "Dashboard";
		$this->view_data['filter']			=	false;
		
		
		$this->view_data['b_color']			=	"skin-2";
		$this->view_data['topleft_title']	=	"Viral Load";
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap','highcharts')));
		

		$this->view_data['sidebar'] 		= 	"vl_sidebar";
		$this->view_data['title'] 			= 	"Viral Load | Dashboard";
		$this->view_data['filter']			=	false;	
		$this->view_data['menu_select']		= 	array(0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."vl/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Viral Load|Home",
																	"link"		=>	base_url()."vl/home_page_view",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['program']  = 2;
	}


}