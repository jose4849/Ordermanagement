<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {


	
public function createfile($date){
	    
if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
   
} else {
   die("Invalid date format");
}
		
		  $result=array();
		  $tablename="orderlist";
		  $field="
				orderid,
				tran_id,
				plan_type,	
				insured_name,
				insured_address,
				insured_city,
				mailing_address,
				mailing_city,
				geographical_area,
				mobile_no,
				email,
				v_type_name,
				vehicle_brand,  
				make_year,
				registration_number,
				registration_date,
				engine_number,
				chassis_no,
				capacity,
				driver,
				passenger,
				amount,
				startdate,
				enddate,
				orderstatus,
				paymentstatus,
				submission_date	  
		  ";
		 
		  $rset=$this->db->query("select $field
		  from $tablename
		  join vehicle_type on vehicle_type.vtid = orderlist.vehicle_type
		  where submission_date >= '$date 00:00:00' and submission_date <= '$date 23:59:59'
		  
		  "); 
		  $result=$rset->result_array();
		
		  $filename=$date.".txt"; 
		  $txt="";
		  $myfile = fopen("/home/onlineinsurancer/public_html/data/$filename", "w") or die("Unable to open file!");
		  fwrite($myfile, "". $txt);
		  fclose($myfile);	
		  $m=0;
		  foreach($result as $res){
			 			 
			 //$filename="";
			 //$filename=$res['orderid']."_".$filenamex;
			 
			  $myfile = fopen("/home/onlineinsurancer/public_html/data/$filename", "a") or die("Unable to open file!");
			  $txt = $comma_separated = implode("~", $res);
			  if($m==0){
			  fwrite($myfile, "". $txt);			  
			  }
			  else{
			  fwrite($myfile, "\r\n". $txt);
			  }
			  $m++;
			  fclose($myfile);			  
		  }
		
		
					
	}

	public function forcedownloadall($date){
		$create_content_url="http://localhost/rel/api/createfile/$date";
		$reading_url="http://localhost/rel/data/$date.txt";
		$file_loc="D:download/jose.txt";
		$this->load->library('curl');
		$result = $this->curl->simple_get("$create_content_url");
		$txt = file_get_contents($reading_url);
		$this->load->helper("file");
		$myfile = fopen($file_loc,"w") or die("Unable to open file!");
		fwrite($myfile, "". $txt);
		fclose($myfile);
	}

}


?>