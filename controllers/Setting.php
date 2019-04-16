<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('userid'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
		
		
    }
	 
	public function index()
	{
		$userdata=$this->session->userdata();				
		accesscheck($userdata['userdata']->userid,"setting");	
        $data['_view'] = 'layout/config';
        $this->load->view($data['_view'],$data);
	}
	public function add(){
		    $featured=$_POST;
			if(!empty($featured)){
				$this->db->truncate('setting_meta');
			foreach($featured as $key => $value){
				$array=array(
				'metaname'=>$key,
				'metavalue'=>$value
				);
				//print_r($array);
				$this->db->insert('setting_meta',$array);
			}
			}
			redirect('setting/index');
	}
}
