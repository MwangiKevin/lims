<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class email extends MY_Controller {

	public function __construct()
	{
		$this->view_data['content_view'] 	= 	"reports/send_email_view";
		$this->view_data['menu_select']		= 	"side_mail";
		$this->load->model('mail_model');
		$this->load->module("upload/upload");
	}
	
	public function index(){
		$this->admin_mail();
	}
	
	public function compose_mail()
	{
		$this->login_reroute(array(2));
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID Reports | Mailing";
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"Reports";
		$this->view_data['submenu_select']	= 	"side_email_details";
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['breadcrumbs'] 	=	array(
															0 	=>	array(
																		"title" 	=>	"Home",
																		"link"		=>	base_url()."reports/",
																		"class"		=>	""
																		),
															1 	=>	array(
																		"title" 	=>	"Email",
																		"link"		=>	base_url()."reports/email",
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
	
	//function email_with_attachment($from,$to , $subject, $mail_msg_head, $mail_msg_body,$mail_msg_footer,$file_path,$file_name){
	function email_with_attachment(){
				
		// $fileatt_name = $file_name;
		// $fileatt = $file_path.$file_name;
		
		$fileatt_type = "application/octet-stream";
		$email_from = "keginski@gmail.com";
		$email_subject = $_POST['subject'];
		
		$email_msg = $_POST['message'];//$mail_msg_head."<br/> ";
		// $email_msg .= $mail_msg_body."<br/ >";
		// $email_msg .= $mail_msg_footer;
		
		$email_to = $_POST["recepients"];
		
		$headers = "From:   ".$email_from;
		
		// $file = fopen($fileatt, 'rb');
		// $data = fread($filw, filesize($fileatt));
		// fclose($file);
		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}XMLReader
		$headers .=\nMIME-Version: 1,0 \n".
		"Content_Type:multipart/mixed \n".
		 " boundary=\"{$mime_boundary}\" ";
		 
		 $email_msg .="This is a multi-part in MIME format.\n\n".
		 "--{$mime_boundary}\n".
		 "Content-Type: text/html: charset=\"iso-8859-1\"\n" .
		 "Content-Transfer-Encoding: 7bit\n\n" ;
		 
		 //$data = chunk_split(base64_encode($data));
		 $email_message .= "--{$mime_boundary}\n";
		 // "Content_type: {$fileatt_type};\n".
		 // " name=\"{$fileatt_name}\"\n".
		 // "Content-Transfer-Encoding: base64\n\n".
		 //$data .="\n\n".
		 "--{$mime_boundary}--\n";
		 
		 if(@mail($email_to,$subject,$email_message,$headers)){
		 	return true;
		 }
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}