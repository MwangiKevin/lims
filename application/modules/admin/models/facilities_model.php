<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class facilities_model extends MY_Model {
	
    public function register_facilities(){
        $register_facilities = array(
			'id' 			 =>   NULL,
			'facility_id'    =>   $this->input->post('facility'),
			'requested_by'   =>   $user_id,
			'equipment_id'   =>   $this->input->post('device_type'),
			'request_status' =>   0,
			'date_requested' =>   NUll,
			'serial_number'  =>   $this->input->post('serial_number'),
			'ctc_id_no'      =>   $this->input->post('ctc_id_no')
			
			);

		$insert = $this->db->insert('facility', $register_facilities);
		return $insert;
    }

    public function FunctionName()
    {
    	
    }

     public function FunctionName()
    {
    	
    }
    
}