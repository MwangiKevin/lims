<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class facilities extends MY_Controller {

	public function __construct(){
		$this->login_reroute(array(1));

		
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID | Dashboard";
		$this->view_data['filter']			=	false;


		$this->view_data['b_color']			=	"skin-1";
		$this->view_data['topleft_title']	=	"Admin";

		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['menu_select']		= 	array("facilities");
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."admin/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Facilities",
																	"link"		=>	base_url()."admin/facilities",
																	"class"		=>	"active"
																	)
												);
		$this->view_data['menu_select']		= 	"side_facilities";
	}

	public function index(){

		$this->facilities_details();
	}

	public function facilities_details(){		
		$result = R::getAll("SELECT `facility_id`,
                                   `facility_name`,
                                   `facility_code`,
                                   `facility_email`,
                                   `facility_telephone`,
                                   `district_id`,
                                   `district_name`,
                                   `district_status`,
                                   `region_id`,
                                   `region_name`,
                                   `region_fusion_id`
                            FROM `v_facility_details`");
        //print_r($result); die();
        $this->view_data['result']          =   $result;
        $this->view_data['content_view'] 	= 	"admin/facilities_details_view";
		$this->view_data['submenu_select']	= 	"side_fac_details";
		$this -> template($this->view_data);
	}

    public function facilities_registration(){	


		$this->view_data['submenu_select']	= 	"side_fac_registration";

    	$result = R::getAll("SELECT `facility_id`,
    								`facility_code`,
                                   `facility_name`,
                                   `district_id`,
                                   `district_name`,
                                   `district_status`,
                                   `region_id`,
                                   `region_name`,
                                   `region_fusion_id`
                            FROM `v_facility_details`");

    	$districts = R::getAll("	SELECT 
									`dis`.`id`				AS `district_id`,									
									`dis`.`name`			AS `district_name`,
									`reg`.`id`				AS `region_id`,
									`reg`.`name`			AS `region_name`
									

								FROM `district` `dis`
									LEFT JOIN `region` `reg`
									ON `dis`.`region_id` = `reg`.`id`
										
							ORDER BY `district_name`
							");
        
        $regions = R::getAll("	SELECT 

									`reg`.`id`				AS `region_id`,
									`reg`.`name`			AS `region_name`,
									`reg`.`fusion_id`       AS `fusion_id`,
                                    `reg`.`status` 
								FROM `region` 	`reg`		
									
							ORDER BY `region_name`
							");
    	//print_r($regions); die();
    	
    	$this->view_data['details']         =   $result;
        $this->view_data['districts']       =   $districts;
        $this->view_data['regions']         =   $regions;
        $this->view_data['content_view'] 	= 	"admin/facilities_registration_view";
		
		$this -> template($this->view_data);
	}
    
    public function registration(){
        $this->form_validation->set_rules('fac_code', 'Region', 'trim|required');
		$this->form_validation->set_rules('dis', 'District', 'trim|required');
		$this->form_validation->set_rules('fac_name', 'Facility Name', 'trim|(str)');
		$this->form_validation->set_rules('fac_email', 'Facility Email', 'trim|required');
        $this->form_validation->set_rules('fac_phone', 'Facility Phone', 'trim|required');
        $this->form_validation->set_rules('fac_tel1', 'Facility Telephone 1', 'trim|required');
        $this->form_validation->set_rules('fac_tel2', 'Facility Telephone 2', 'trim|required');
        
		if ($this->form_validation->run() == FALSE) 
		{
			
            $this->index();
		} else 
		{
			
            $this->load->model('admin_model');

			$insert = $this->admin_model->register_facilities();
			if($insert)
			{
                $this->index();
				//redirect('admin/facilities');
			}
		}
		
	}

	public function edit_facility()
	{
		$id = (int)$this->input->post('editfacilityid');
		$code = $this->input->post('code');
		$facility = $this->input->post("facname");
		// $district = $this->input->post("dis");
		// $region = $this->input->post("reg");
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');


		$update_facility = R::getAll("UPDATE `facility`
										SET 
											`name`='$facility',
											`code`='$code',
											`email`='$email',
											`telephone`='$phone'
											
										WHERE 
											`id`='$id'"
		);

		$this->index();
	}

	public function edit_district()
	{
		echo "*********";
	}
        
}