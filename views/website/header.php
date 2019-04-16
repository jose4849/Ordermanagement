<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="http://reliance.com.bd/wp-content/uploads/2015/09/ril-favicon.png" type="image/x-icon" />	
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="<?php echo base_url(); ?>asset/public/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>asset/public/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>asset/public/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>asset/public/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>asset/public/plugins/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/public/css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="<?php echo base_url(); ?>asset/public/colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="<?php echo base_url(); ?>asset/public/js/modernizr.js"></script><!-- Modernizr -->

<script src="<?php echo base_url(); ?>asset/public/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="<?php echo base_url(); ?>asset/public/plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="<?php echo base_url(); ?>asset/public/plugins/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel --> 
<script src="<?php echo base_url(); ?>asset/public/plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="<?php echo base_url(); ?>asset/public/js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="<?php echo base_url(); ?>asset/public/js/bootstrap.js"></script> <!-- UI --> 
<script src="<?php echo base_url(); ?>asset/public/js/waypoints.js"></script> <!-- Waypoints --> 

<link href="<?php echo base_url(); ?>asset/datepicker/css/datepicker.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>asset/datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>asset/datepicker/js/moment.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133118664-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133118664-1');
</script>

</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="top-header hidden-xs" style="background-color:#5c479e;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <ul class="horiz-nav pull-left">
              <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-user"></i> Login</a>
              </li>
              
              </ul>
          </div>
          <div class="col-md-8 col-sm-6">
            <ul class="horiz-nav pull-right">
                  <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="middle-header">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-8 col-xs-8">
            <h1 class="logo"> <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>asset/public/images/logo.png" alt="Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-4 col-xs-4">
              <div class="contact-info-blocks hidden-sm hidden-xs">
                  <div>
                      <i class="fa fa-phone"  style="color:#5c479e" ></i> Help Line For You
					  <?php $info=dbq("select * from setting_meta where metaname='call_center_number'");
				if(isset($info[0])){ $call_center_number=$info[0]->metavalue; } ?>
                    <span></span>
                </div>
                  <div>
                      <i class="fa fa-envelope" style="color:#5c479e"></i> Email Us
                    <span> </span>
                </div>
                  
             </div>
              <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">
                <li><a href="http://reliance.com.bd/">Home</a>
                  
                </li>
                          
                
                <li><a href="<?php echo base_url(); ?>welcome/contact/">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Site Header -->