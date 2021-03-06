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


		$this->view_data['b_color']			=	"skin-1";
		$this->view_data['topleft_title']	=	"Admin";

		$this->view_data['menu_select']		= 	"side_users";
		$this->view_data['submenu_select']	= 	"side_user_details";

		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array('dataTables','style-bootstap')));		
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."users/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Users",
																	"link"		=>	base_url()."admin/users",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Users Details",
																	"link"		=>	base_url()."admin/users/users_details",
																	"class"		=>	"active"
																	)
												);
        $this->view_data['program']  = 2;
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

		$this->view_data['submenu_select']	= 	"side_user_registration";
       $this->view_data['user_groups']      =   $this->admin_model->user_groups();
       $this->view_data['content_view'] 	= 	"admin/users_registration_view";
       $this->template($this->view_data); 
       
    }
    
    public function save_user(){
        $default_password = $this->my_hash($this->config->item("default_password"));
        
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('user_group', 'User Group', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->users_registration();
		} else 
		{
			echo "The form validation was very successfull";
            $this->load->model('admin_model');

			$registration = $this->admin_model->register_users($default_password);
			if($registration)
			{
                $this->users_registration();
				
			}
		}
        
    }
    
    public function save_user_group(){
        $user_group = $this->input->post("usr_grp2");
       
        $this->db->query("INSERT INTO `user_group` 
								(
									`name`
								) 
								VALUES(
										'$user_group'
									)
								"
			);
        
        redirect("admin/users/users_registration");
    }

    public function edit_user()
    {
    	$id = (int)$this->input->post('edituserid');
    	$name = $this->input->post('name');
    	$email = $this->input->post('email');
    	$phone = $this->input->post('phone');

    	$update_user = R::getAll("UPDATE `user`
    								SET 
    									`name` = '$name',
    									`phone` = '$phone',
    									`email` = '$email'
    								WHERE
    									`id` = '$id'"
    							);
    	$this->index();
    }

    public function reset_password()
    {

    	$id = (int)$this->input->post('resetuserid');
    	$oldpassword = $this->my_hash($this->input->post('oldpassword'));
    	//echo $oldpassword;die();
    	$newpassword = $this->input->post('newpassword');
    	$confirmnewpassword = $this->input->post('cofirmnewpassword');
    	$oldpass = R::getAll("SELECT 
					    			`password`
					    	FROM `user`
					    	WHERE id = '$id'"
					);

    	if ($newpassword == $confirmnewpassword) {
    		if ($oldpassword == $oldpass[0]['password']) {
    			$newpassword = $this->my_hash($newpassword);
    			//echo $newpassword; die();
    			$update_facility = R::getAll("UPDATE `user`
										SET 
											`password`='$newpassword'
										WHERE 
											`id`='$id'"
									);
    			$this->index();
    		} else {
    			echo "<html><head><title>Incorrect Password</title></head><body><script type='text/javascript'>alert('The old password entered is incorrect');</script></body></html>";
    			$this->index();
    		}
    		
    	} else {
    		echo "<html><head><title>Incorrect Password</title></head><body><script type='text/javascript'>alert('The passwords entered do not coincide');</script></body></html>";
    		$this->index();
    	}
    	
    }

    public function remove_user($id)
    {

    	$remove = R::getAll("UPDATE `user` 
							SET 
								`status`='2'
							WHERE 
								`id`='$id'
						");
    	$this->index();
    }

}