<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class email extends MY_Controller {

public function __construct()
{
	$this->view_data['content_view'] 	= 	"alerts/email_view";
	$this->view_data['menu_select']		= 	"side_mail";
	$this->load->model('mail_model');
}

public function admin_mail()
{
	$this->login_reroute(array(1));
	$this->view_data['sidebar'] 		= 	"admin_sidebar";
	$this->view_data['title'] 			= 	"EID | Mailing";
	$this->view_data['b_color']			=	"skin-1";
	$this->view_data['topleft_title']	=	"Admin";
	$this->view_data['submenu_select']	= 	"side_email_details";
	$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
	$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."alerts/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Email",
																	"link"		=>	base_url()."alerts/email",
																	"class"		=>	"active"
																	)
												);
	$this->view_data['sent_emails']    =    $this->mail_model->sent_mail();
	
	$this -> template($this->view_data);
}
	function send_email()  
	{
		
		$id = $this->session->userdata("id");
		$recepient = $this->input->post("recepients");
		$subject   = $this->input->post("subject");
		$message   = $this->input->post("message");

		$this->email($id, $recepient, $subject, $message);
	}

	function email($id, $recepient, $subject, $message)  
	{
		$time=date('Y-m-d');

		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'cd4lims.tz@gmail.com',
			'smtp_pass' => 'cd4lims.tz2014',
			);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('cd4lims.tz@gmail.com', 'CD4');
		$this->email->to($recepient);
		$this->email->subject($subject);
		$this->email->message($message);

		if($this->email->send())
			{	

				$this->mail_model->send_mail($id, $recepient, $subject, $message, $time);
				$this->admin_mail();
			} else 
			{
				show_error($this->email->print_debugger());
			}
		
	}

	public function LoadMailConfig()
	{
		
	}


}