<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Login.php
 * @author Imron rosdiana
 */
class Login extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "login");
	

		
        if(!empty($_SESSION['userid'])){
            redirect('home');
		}	
    }

    public function index() {
        if($_POST) {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'userid' => $result->userid,
                    'name' => $result->name,
                    'userdata' => $result
                ];
				
				if(($result->user_type)=="SUPERADMIN"){
					
					  $access=array(	
						'order',
						'order_status',
						'order_print',
						'order_download',
						'vehicle_type',
						'price_table',
						'setting',
						'user',
					);
					$acessdata=array();
					foreach($access as $acc){
						$acessdata[$acc]='on';
						$acessdata[$acc."_add"]='on';
						$acessdata[$acc."_edit"]='on';
						$acessdata[$acc."_del"]='on';
					}
					$updatedata=array(
					'access'=>json_encode($acessdata)
					);
					$this->db->where("userid",$result->userid);
					$this->db->update('user',$updatedata);
					
				}
				
				
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('login');
            }
        }

        $this->load->view("login");
    }
	public function logout(){
		$data = ['user', 'username','userdata'];
        $this->session->unset_userdata($data);
        redirect('login');
	}
	public function forget_password(){
		$this->load->view('forget_password');
	}
	public function passwordrecovery(){
		     $email=$_POST['username'];
     $resultset=$this->db->query("select * from user where email = '$email'");
     $result=$resultset->result();
     if(isset($result[0])){
         
          $password=$result[0]->password;

              $msg = "You  password is: $password";
              mail("$email","Password Recovery",$msg);
              
			  $this->session->set_flashdata('flash_data', 'Password is send to your email. Thank you.');
			  redirect('login');
         
        
     }
     else{
			$this->session->set_flashdata('flash_data', 'Invalid email address.'); 
redirect('login');			

     }
	}
}
