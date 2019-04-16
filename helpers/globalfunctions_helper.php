<?php

    if(!function_exists('result'))
    {
      function dbq($query){
       $CI = get_instance();
       $res=$CI->db->query($query); 
	   return $res->result();
      }
      function dbqa($query){
       $CI = get_instance();
       $res=$CI->db->query($query); 
	   return $res->result_array();
      }	
	  function accesscheck($userid,$key){
		$userarray=dbq("select access from user where userid=$userid");
		if(isset($userarray[0])){
			$valuedata=$userarray[0]->access;
			$value=  json_decode($valuedata,true);
		}
		if(isset($value[$key])){ }else{ die('Access is forbidden.'); }
		  
	  }	
	  function usernameid($userid){
		$userarray=dbq("select * from user where userid=$userid");
		if(isset($userarray[0])){
			return $userarray[0]->name;
			
		}
		
		  
	  }
	  
	  
	  function getcatname($catid){
		$data=dbq("select * from product_cat where pcid=$catid");
		if(isset($data[0])){
			return $valuedata=$data[0]->pcname;			
		}		  
	  }	
	  
	  function getcustomername($customer_id){
		$data=dbq("select * from customer where customer_id=$customer_id");
		if(isset($data[0])){
			return $valuedata=$data[0]->customer_name;			
		}		  
	  }		  
	  
	  
	  
    }


?>