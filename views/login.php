<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="<?php echo base_url('login/forget_password'); ?>">Forgot password?</a></div>
                </div>
                <h5 style="text-align:center;color:red;"><?php if(isset($_SESSION)) { echo $this->session->flashdata('flash_data'); } ?></h5>
                <div style="padding-top:30px" class="panel-body">
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form action="<?= site_url('login') ?>" method="post" id="loginform" class="form-horizontal" role="form">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" value="" class="form-control" name="password" placeholder="password">
                        </div>
                        
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls" style="text-align:center;">
                                <button class="btn btn-success">Login  </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>