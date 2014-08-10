<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class sms extends MY_Controller {

	public function __construct()
	{
		$this->view_data['content_view'] 	= 	"alerts/sms_view";
		$this->view_data['menu_select']		= 	"side_mail";
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID | Mailing";
		$this->view_data['b_color']			=	"skin-1";
		$this->view_data['topleft_title']	=	"Admin";
		$this->view_data['submenu_select']	= 	"side_sms";
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['breadcrumbs'] 	=	array(
															0 	=>	array(
																		"title" 	=>	"Home",
																		"link"		=>	base_url()."alerts/",
																		"class"		=>	""
																		),
															1 	=>	array(
																		"title" 	=>	"SMS",
																		"link"		=>	base_url()."alerts/load_sms",
																		"class"		=>	"active"
																		)
													);
		
	}

	public function load_sms()
	{
		$this->login_reroute(array(1));
		$this -> template($this->view_data);
	}

	public function send_message()
	{
		$tel_no = $this->input->post('telephone');
		$message = $this->input->post('message');

		try{
			$this->sms($tel_no,$message);
			$this-> msg_page("SMS sent","success");
			//redirect('alerts/sms/load_sms');
		}catch (Exception $e){
			$this-> msg_page("There was an error in sending the SMS","error");
		}

	}
	public function sms($tel_no,$message,$req_id=null)
	{	
		try{
			file("http://41.57.109.242:13000/cgi-bin/sendsms?username=clinton&password=ch41sms&to=$tel_no&text=$message");		
			$this->sms_log($tel_no,$message,$req_id=null);
		}catch (Exception $e){

		}

	}
	private function sms_log($tel_no,$message,$req_id=null,$result_dispach_id=null,$fac_id=null,$user_id=null){

		$sms_log = R::dispense('smslog');

		$sms_log -> user_id					= $user_id;
		$sms_log -> result_dispach_id 		= $result_dispach_id;
		$sms_log -> facility_id 			= $fac_id;
		$sms_log -> tel_no 					= $tel_no; 
		$sms_log -> message 				= $tel_no;
		$sms_log -> timestamp 				= date('Y-m-d H:i:s');

		R::store($sms_log);

	}

}