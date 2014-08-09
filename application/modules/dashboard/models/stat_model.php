<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class stat_model extends MY_Model {

	public function __construct(){
		parent::__construct();
	}
	public function lab($program=0){

		$data['st_cumm_test'] 		=	0;
		$data['st_rec_samp'] 		=	0;
		$data['st_rej_samp'] 		=	0;
		$data['st_failed_tst'] 		=	0;
		$data['st_tested_samp'] 	=	0;
		$data['st_pos'] 			=	0;
		$data['st_neg'] 			=	0;
		$data['st_tot'] 			=	0;

		return $data;
	}
	public function facility($program=0){

		$data['fac_served'] 			=	0;
		$data['fac_without_emails'] 	=	0;
		$data['fac_without_g4s'] 		=	0;
		$data['fac_sms_printers'] 		=	0;

		return $data;

	}


}