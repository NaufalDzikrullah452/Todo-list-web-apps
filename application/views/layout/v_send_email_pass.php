<!DOCTYPE html>
<html lang="en">
<head>
	<title>Send link via email</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/auth/images/icons/logo.png');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= config_item('vendor') ?>bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= config_item('fonts') ?>font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= config_item('fonts') ?>Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= config_item('vendor') ?>animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= config_item('vendor') ?>css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= config_item('vendor') ?>animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= config_item('vendor') ?>select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= config_item('vendor') ?>daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= config_item('css_auth') ?>util.css">
	<link rel="stylesheet" type="text/css" href="<?= config_item('css_auth') ?>main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?= site_url('index.php/send_email/send')?>" method="POST">
					<span class="login100-form-title p-b-43">
						Forgot Password?
					</span>
						<div><br>
					<p class="txt3" style="text-align: center; font-size: 18px;">Enter the email address <br>
                    associated with your account</p>
                     <br>
                     <p class="txt2" style="text-align: center; font-size: 16px;">We will email you a link 
                     to reset <br>your password</p>
						</div>
						<br><br>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100"> Your Email</span>
					</div>
                    <br><br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send
						</button>
					</div>
					
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url('assets/auth/images/bg_forgot_pass.jpg');?>')">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?= config_item('vendor') ?>jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= config_item('vendor') ?>animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= config_item('vendor') ?>bootstrap/js/popper.js"></script>
	<script src="<?= config_item('vendor') ?>bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= config_item('vendor') ?>select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= config_item('vendor') ?>daterangepicker/moment.min.js"></script>
	<script src="<?= config_item('vendor') ?>daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= config_item('vendor') ?>countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= config_item('js_auth') ?>main.js"></script>

</body>
</html>