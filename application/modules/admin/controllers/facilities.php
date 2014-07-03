<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class facilities extends MY_Controller {

	public function __construct(){
		$this->login_reroute(array(1));

		
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID | Dashboard";
		$this->view_data['filter']			=	false;
		//$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['menu_select']		= 	array(0);
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
	}

	public function index(){

		$this->facilities_details();
	}

	public function facilities_details(){		
		$sql  =  "SELECT 
                        `facility_id`,
                        `facility_name`,
                        `facility_email`,
                        `facility_telephone`,
                        `district_name`,
                        `region_name`
                 FROM `v_facility_details`";
        $result = R::getAll($sql);
        //print_r($result); die();
        $this->view_data['result']          =   $result;
        $this->view_data['content_view'] 	= 	"admin/facilities_details_view";
		$this -> template($this->view_data);
	}

    public function facilities_registration(){	
    	$result = R::getAll("SELECT `facility_id`,
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
        echo "thank you for your registration for the new facilities";
        $this->index();
    }
    
}