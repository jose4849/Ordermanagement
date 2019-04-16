<?php $this->view('header'); ?>
<?php
				$userdata=$this->session->userdata();
				
				$userid=($userdata['userdata']->userid);
				$userarray=dbq("select access from user where userid=$userid");
				if(isset($userarray[0])){
					$valuedata=$userarray[0]->access;
					$value=  json_decode($valuedata,true);
				}
									     						        
?>
	<style>
.jumbotron{
	padding-right:2px !important;
	padding-left:2px !important;
	
}
td,th{ vertical-align:top !important; text-align:center; }
</style>
<?php  $key="order"; if(isset($value[$key])){ ?> 
<h3 style="text-align:center;text-transform:uppercase">Home</h3>


<?php } ?>


	
<?php $this->view('footer'); ?>