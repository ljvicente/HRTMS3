<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HRTMS Candidate Login</title>

    <link href="<?php echo base_url();?>hrtms_resources/_login/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>hrtms_resources/_login/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/_login/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome.min.css" />
    <style type="text/css">
        .red {
            color: red!important;
        }
    </style>

    <link rel="shortcut icon" href="favicon.ico">

</head>

<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
                <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo base_url();?>"><img width="120px" src="<?php echo base_url();?>hrtms_resources/images/logo.jpg" alt=""> AMI - Candidate Module</a>
            </div>
        </div>
    </div>

    <div class="container">
        <?php if(!$is_forgot) { ?>
        <div id="login-wraper" class="login-div">
            <form class="form login-form" action='<?php echo base_url();?>auth/verify_user' method="post">
                <legend><span class="blue">Candidate</span> Login</legend>
                <?php if($this->session->flashdata('error_msg')) echo $this->session->flashdata('error_msg'); ?>
                <div class="body">
                    <label>Username: 
                    <input autofocus name="username" id="username" type="text" required></label>

                    <label>Password: 
                    <input name="password" id="password" type="password" required>
                    </label>
                </div>

                <div class="footer">
                    <a class="btn btn-info" href="<?php echo base_url();?>candidate/login/?forgot=pass">Forgot Password</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
        <?php } else {?>
        <div id="login-wraper" class="forgot-div" style="height: 280px;">
            <form class="form login-form" action='<?php echo base_url();?>auth/verify_user/forgot_password' method="post">
                <legend>Forgot Password</legend>
                <?php if($this->session->flashdata('error_msg')) echo $this->session->flashdata('error_msg'); ?>
                <div class="body">
                    <p><small><i class="icon-refresh red"></i> Reset link will be sent to your email account.</small></p>
                    <label>Email: 
                    <input autofocus name="email" id="email" type="email" required>
                    </label>

                </div>

                <div class="footer">
                    <a class="btn btn-info" href="<?php echo base_url();?>candidate/login"><i class="icon-reply"></i> Back</a>
                    <button type="submit" class="btn btn-danger">Reset Password</button>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>

    <footer class="white navbar-fixed-bottom">
        Copyright <a href="">Alliance Mansols Inc.</a> &copy; 2013
    </footer>

    <script src="<?php echo base_url();?>hrtms_resources/_login/js/jquery.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/_login/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/_login/js/backstretch.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/_login/js/login.js"></script>


    <script type="text/javascript">

        $(document).ready(function($) {

            $.backstretch([
                "<?php echo base_url();?>hrtms_resources/images/bg5.jpg",
                "<?php echo base_url();?>hrtms_resources/images/bg2.jpg", 
                "<?php echo base_url();?>hrtms_resources/images/bg5.jpg",
                "<?php echo base_url();?>hrtms_resources/images/bg2.jpg"
            ], {duration: 3000, fade: 750});
        });
    </script>

</body>
</html>
