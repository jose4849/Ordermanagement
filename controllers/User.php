<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
		
        if(empty($this->session->userdata('userid'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
	
    } 

    /*
     * Listing of user
     */
    function index()
    {
		$userdata=$this->session->userdata();				
		accesscheck($userdata['userdata']->userid,"user");	
		
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'user/index';
        $this->load->view($data['_view'],$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
	$userdata=$this->session->userdata();				
		accesscheck($userdata['userdata']->userid,"user_add");	
	
        $this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','valid_email');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				
				'user_type' => $this->input->post('user_type'),
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'organization' => $this->input->post('organization'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'nid' => $this->input->post('nid'),
				'open_by' => $this->input->post('open_by'),
				'address_current' => $this->input->post('address_current'),
				'address_permanent' => $this->input->post('address_permanent'),
				'address_business' => $this->input->post('address_business'),
				            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view($data['_view'],$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($userid)
    {   
	$userdata=$this->session->userdata();				
		accesscheck($userdata['userdata']->userid,"user_edit");	
	
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($userid);
        
        if(isset($data['user']['userid']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('email','Email','valid_email');
		
			if($this->form_validation->run())     
            {   
                $params = array(
				'user_type' => $this->input->post('user_type'),
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'organization' => $this->input->post('organization'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'nid' => $this->input->post('nid'),
				'open_by' => $this->input->post('open_by'),
				'address_current' => $this->input->post('address_current'),
				'address_permanent' => $this->input->post('address_permanent'),
				'address_business' => $this->input->post('address_business'),
				                );

                $this->User_model->update_user($userid,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view($data['_view'],$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($userid)
    {
		$userdata=$this->session->userdata();				
		accesscheck($userdata['userdata']->userid,"user_del");	
        $user = $this->User_model->get_user($userid);

        // check if the user exists before trying to delete it
        if(isset($user['userid']))
        {
            $this->User_model->delete_user($userid);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    	function savesetting($userid){
       
        $data=array();
		
        $data['access']=json_encode($_POST);
        $this->db->where("userid",$userid);
        $this->db->update('user',$data);
		/*
		$userdata=$this->session->userdata();							        
		$usertype=($userdata['user_type']);		
		if($usertype=='SUPERADMIN'){
			$useraccess='{"{"user":"on","user_add":"on","user_edit":"on","user_del":"on","area":"on","area_add":"on","area_edit":"on","area_del":"on","service_cateory":"on","service_cateory_add":"on","service_cateory_edit":"on","service_cateory_del":"on","service":"on","service_add":"on","service_edit":"on","service_del":"on","technician":"on","technician_add":"on","technician_edit":"on","technician_del":"on","technician_report":"on","technician_report_add":"on","technician_report_edit":"on","technician_report_del":"on","assign_service":"on","assign_service_add":"on","assign_service_edit":"on","assign_service_del":"on","customer":"on","customer_add":"on","customer_edit":"on","customer_del":"on","order":"on","order_add":"on","order_edit":"on","order_del":"on","profile":"on","profile_add":"on","profile_edit":"on","profile_del":"on","reference":"on","reference_add":"on","reference_edit":"on","reference_del":"on"}';
			$array=array(
				'access'=>$useraccess
			);
			$this->db->where('userid',$userid);
			$this->db->update('user',$array);
		}	
		*/
        redirect('user/index');
    }
    function profile($userid)
    {  
        
        
	
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($userid);
        
        if(isset($data['user']['userid']))
        {
            $this->load->library('form_validation');

			
		
			if($this->form_validation->run())     
            {   
                $params = array(
				
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'organization' => $this->input->post('organization'),
				
				'mobile' => $this->input->post('mobile'),
				
				
				'address_current' => $this->input->post('address_current'),
				'address_permanent' => $this->input->post('address_permanent'),
				'address_business' => $this->input->post('address_business'),
				                );
				                
				$this->db->where('userid',$userid);                
                $this->db->update('user',$params);
                
                print_r($params);
                die();
               // $this->User_model->update_user($userid,$params);            
                redirect("user/profile/$userid");
            }
            else
            {
                $data['_view'] = 'user/profile';
                $this->load->view($data['_view'],$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    }
    
    function profileupdate($userid)
    {  
        
        
	 $params = array(
				
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'organization' => $this->input->post('organization'),
				
				'mobile' => $this->input->post('mobile'),
				
				
				'address_current' => $this->input->post('address_current'),
				'address_permanent' => $this->input->post('address_permanent'),
				'address_business' => $this->input->post('address_business'),
				                );
				                
				$this->db->where('userid',$userid);                
                $this->db->update('user',$params);
                
                //print_r($params);
                //die();
               // $this->User_model->update_user($userid,$params);            
                redirect("user/profile/$userid");
        
    } 	
    
    
    
    
}