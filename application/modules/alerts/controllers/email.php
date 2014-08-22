<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class email extends MY_Controller {

	        // IMAP/POP3 (mail server) LOGIN
        // var $imap_server    = 'imap.gmail.com:993/imap/ssl';
        // var $imap_user        = 'lims.eidvl@gmail.com';
        // var $imap_pass        = 'eidvl.tz2014';


public function __construct()
{
	$this->view_data['content_view'] 	= 	"alerts/email_view";
	$this->view_data['menu_select']		= 	"side_mail";
	$this->load->model('mail_model');
	$this->load->library('Imap');
	$this->mail_model->get_emails();
}

public function index()
{
	$this->admin_mail();
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
	// $inbox = $this->imap->cimap_open($this->imap_server, 'INBOX', $this->imap_user, $this->imap_pass) or die(imap_last_error());

 //            $this->view_data['totalmsg']    = $this->imap->cimap_num_msg($inbox);
 //            $this->view_data['quota']    = $this->imap->cimap_get_quota($inbox);

 //            $this->load->view('mail_view', $data_array); 
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
			'smtp_user' => 'lims.eidvl@gmail.com',
			'smtp_pass' => 'eidvl.tz2014',
			);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('lims.eidvl@gmail.com', 'EID/LIMS');
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

	public function remove_email($id)
	{
		$remove = R::getAll("UPDATE `mailerlog` 
							SET 
								`send_status`='0'
							WHERE 
								`id`='$id'
						");
    	$this->index();
	}

	public function fetch_emails()
	{
            
		$inbox = $this->imap->cimap_open($this->imap_server, 'INBOX', $this->imap_user, $this->imap_pass) or die(imap_last_error());

            $this->view_data['totalmsg']    = $this->imap->cimap_num_msg($inbox);
            $this->view_data['quota']    = $this->imap->cimap_get_quota($inbox);

            $this->load->view('mail_view', $data_array);    
	}


	public function get_inbox()
	{
		$mb = imap_open("{host:port/imap}","lims.eidvl@gmail.com", "eidvl.tz2014" );

		$messageCount = imap_num_msg($mb);
		for( $MID = 1; $MID <= $messageCount; $MID++ )
		{
		   $EmailHeaders = imap_headerinfo( $mb, $MID );
		   $Body = imap_fetchbody( $mb, $MID, 1 );
		   doSomething( $EmailHeaders, $Body );
		}
	}


}