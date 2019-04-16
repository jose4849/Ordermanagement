<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('website/index');
	}
	public function getcode(){
		$this->load->view('website/getcode');
	}
	public function getprice(){
	    if(empty($_SESSION)){
	      $_SESSION = $_POST;  
	    }
	    else{
	         $_SESSION['plan_type'] = $_POST['plan_type'];
	         $_SESSION['vehicle_type'] = $_POST['vehicle_type'];
	         $_SESSION['driver'] = $_POST['driver'];
	         $_SESSION['passenger'] = $_POST['passenger'];
	         $_SESSION['capacity'] = $_POST['capacity'];
	         $_SESSION['startdate'] = $_POST['startdate'];
	         $_SESSION['enddate'] = $_POST['enddate'];
	        
	    }
		
		//$originalDate = $_SESSION['enddate'];
		//$newDate = date("Y-m-d", strtotime($originalDate));
		//$_SESSION['enddate']=$newDate;
		//$_REQUEST
		
		$this->load->view('website/getprice');
		//print_r($_POST);
	}
	public function buyinsurance(){
	    	
		$this->load->view('website/buyinsurance');
	}
	public function declearation(){
	    	
		$this->load->view('website/declearation');
	}	
	
	public function saveinsurance(){
		echo '<pre>';
		$_SESSION = $_POST;
		print_r($_POST);
		
		die();
		$this->db->insert('order',$_POST);
		$this->load->view('welcome_message');
	}
	function contact(){
		$this->load->view('website/contact');
	}
	function ordertrack(){
		$this->load->view('website/trackorder');
	}
	function ordercheck(){
		
		
		$orderid=$_POST['orderid'];
		$mobile_no=$_POST['mobile'];
		$res=dbq("select orderstatus,registration_number from orderlist where orderid = $orderid and mobile_no =  '$mobile_no'");
		if(isset($res[0])){
			echo "<strong>Registration No:</strong> ".$res[0]->registration_number."<br>";
			echo "<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order status: </strong>".$res[0]->orderstatus."<br>";
		}
		else{
			echo 'Invalid order ID.';
		}
		
	}
	
}
