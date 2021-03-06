<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up Your Todo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/auth/images/icons/logo.png'); ?>" />
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
				<form class="login100-form validate-form" method="post" action="<?= base_url('index.php/sign_up') ?>">
					<span class="login100-form-title p-b-43">
						Get's Started
					</span>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="username" value="<?= set_value('username') ?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					<?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="email" value="<?= set_value('email') ?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					<?= form_error('email', '<small class="text-danger pl-2">', '</small>') ?>

					<div class="wrap-input100 ">
						<input class="input100" type="password" name="pass1">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<?= form_error('pass1', '<small class="text-danger pl-2">', '</small>') ?>

					<div class="wrap-input100 ">
						<input class="input100" type="password" name="pass2">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>

					<div><br>
						Already have an account?
						<a href="<?= site_url('index.php/sign_in') ?>" class="txt3"> &nbsp;Log in</a>
					</div>	
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url('assets/auth/images/bg_icon.jpg'); ?>')">
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