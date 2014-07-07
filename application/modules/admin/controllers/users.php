<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class users extends MY_Controller {

	public function __construct(){
		$this->login_reroute(array(1));
        $this->load->model('admin_model');
		$this->view_data['content_view'] 	= 	"admin/users_details_view";
		$this->view_data['sidebar'] 		= 	"admin_sidebar";
		$this->view_data['title'] 			= 	"EID | Users";
		$this->view_data['filter']			=	false;
		//$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array()));
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['menu_select']		= 	array(0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."users/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Users",
																	"link"		=>	base_url()."users/dashboard",
																	"class"		=>	"active"
																	)
												);
	}

	public function index(){

		$this->users_details();
	}

    public function users_details(){
                
        $this->view_data['users']            =   $this->admin_model->user_details();
        $this->view_data['content_view'] 	= 	"admin/users_details_view";
        $this->template($this->view_data);
    }
    
    public function users_registration(){
       $this->view_data['user_groups']      =   $this->admin_model->user_groups();
       $this->view_data['content_view'] 	= 	"admin/users_registration_view";
       $this->template($this->view_data); 
       
    }
    
    public function save_user(){
        
    }
    
    public function save_user_group(){
        
    }

}