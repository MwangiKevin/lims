<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class sms extends MY_Controller {

	public function __construct()
	{
		$this->view_data['content_view'] 	= 	"alerts/sms_view";
		$this->view_data['menu_select']		= 	"side_mail";
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		
	}

	public function load_sms()
	{
		$this->login_reroute(array(1));
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
																		"link"		=>	base_url()."alerts/sms",
																		"class"		=>	"active"
																		)
													);
		$this -> template($this->view_data);
	}

	public function send_message()
	{
		$user_no = $this->input->post('telephone');
		$message = $this->input->post('message');

		file("http://41.57.109.242:13000/cgi-bin/sendsms?username=clinton&password=ch41sms&to=$user_no&text=$message");
		redirect('alerts/sms/load_sms');

	}
}