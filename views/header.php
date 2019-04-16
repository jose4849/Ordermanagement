<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap @ <?php echo $this->session->userdata('name') ?></title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid" style="width:100%;margin-top:50px;">
	
	<div class="row">
		<div class="col-md-12" style="text-align:center;">
			<!--<img src="<?php echo base_url(); ?>asset/public/images/logo.png" />-->
			<h3 style="text-align:center;">Online Order Management</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="<?php echo base_url(); ?>home">Home</a>
				</div>
				<?php
				$userdata=$this->session->userdata();
				
				$userid=($userdata['userdata']->userid);
				$userarray=dbq("select access from user where userid=$userid");
				if(isset($userarray[0])){
					$valuedata=$userarray[0]->access;
					$value=  json_decode($valuedata,true);
				}
									     						        
				?>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?= site_url('customer/index') ?>">Customer List</a>
								</li>							
																
							</ul>
						</li>
					
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Order List<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?= site_url('stock/index') ?>">Today Order</a>
								</li>							
								<li>
									<a href="<?= site_url('stock/add') ?>">All Pending</a>
								</li>								
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales & Invoice<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?= site_url('sales/newsales') ?>">New Sales</a>
								</li>							
								<li>
									<a href="<?= site_url('sales/invoicelist') ?>">Invoice List</a>
								</li>								
							</ul>
						</li>						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?= site_url('stock/index') ?>">Stock</a>
								</li>
							
								<li>
									<a href="<?= site_url('stock/add') ?>">Stock Add</a>
								</li>							
							</ul>
						</li>						
					
					
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?= site_url('product/index') ?>">Product</a>
								</li>
							
								<li>
									<a href="<?= site_url('product_cat/index') ?>">Category</a>
								</li>							
							</ul>
						</li>	
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<?php  $key="setting"; if(isset($value[$key])){ ?> 
								<li>
									<a href="<?= site_url('setting/index') ?>">Configartion</a>
								</li>
								<?php }  $key="user"; if(isset($value[$key])){ ?> 								
								<li>
									<a href="<?= site_url('user/index') ?>">User List</a>
								</li>
								<?php } ?>								
							</ul>
						</li>
						<li>
							<a href="<?= site_url('user/profile') ?>/<?php echo $userid; ?>">Profile</a>
						</li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?= site_url('home/logout') ?>">Logout</a>
						</li>
						
					</ul>
				</div>
				
			</nav>
			<div class="jumbotron">
<!----------------content------>