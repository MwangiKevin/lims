<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
* 
*/
class mail_model extends MY_Model
{
	
	function __construct()
	{
		
	}

	public function send_mail($id, $recepient, $subject, $message, $tim)
	{
		$emails = array(
			'id' 		   =>   NULL,
			'subject'      =>   $subject,
			'message'      =>   $message,
			'recipients'   =>   $recepient,
			'sender_id'    =>   $id,
			'sent_date'    =>   $tim,
			'send_status'  =>   1
			);

		$this->db->insert('mailerlog', $emails);
	}

	public function sent_mail()
	{
		$id = $this->session->userdata("id");
		$sent = R::getAll("SELECT 
								`id`,
								`subject`,
								`message`,
								`recipients`,
								`sender_id`,
								`sent_date`,
								`sent_status`
							FROM `mailerlog`
							WHERE `sender_id` = $id"
							);
	}
}

?>