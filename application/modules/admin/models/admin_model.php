<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class admin_model extends MY_Model {
	
    public function register_facilities(){
        $register_facilities = array(
			'id' 			        =>   NULL,
			'code'                  =>   $this->input->post('fac_code'),
			'name'                  =>   $this->input->post('fac_name'),
			'district_id'           =>   $this->input->post('dis'),
			'partner_id'            =>   0,
			'email'                 =>   $this->input->post('fac_email'),
			'mail_address'          =>   $this->input->post(''),
			'telephone1'            =>   $this->input->post('fac_tel1'),
            'telephone2'            =>   $this->input->post('fac_tel2'),
            'contact_person_phone'  =>   $this->input->post('fac_phone'),
            'google_maps'           =>   NULL
			
			);

		$insert = $this->db->insert('facility', $register_facilities);
		return $insert;
    }

    public function user_details(){
        $sql = "SELECT
                                  `user_id`,
                                  `username`,
                                  `name`,
                                  `user_group_id`,
                                  `user_group`,
                                  `phone`,
                                  `email`,
                                  `status`
                            FROM `v_user_details`";
        return $user_details = R::getAll($sql);
    }
    
    public function user_groups(){
        $sql = "SELECT 
                        `id`,
                        `name`
                FROM `user_group`";
        
        return $user_group = R::getAll($sql);
    }
}