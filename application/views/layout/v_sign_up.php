<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up Your Todo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/auth/images/icons/favicon.ico'); ?>" />
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
				<form class="login100-form validate-form" method="post" action="<?= base_url('sign_up/index') ?>">
					<span class="login100-form-title p-b-43">
						Get's Started
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					<?= form_error('email', '<small class="text-danger pl-2">', '</small>') ?>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="pass1" name="pass1">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<?= form_error('pass1', '<small class="text-danger pl-2">', '</small>') ?>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="pass2" name="pass2">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								I agree to platform’s Terms Of Service and Privacy Policy
							</label>
						</div>

					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div><br>
						Already have an account?
						<a href="#" class="txt3"> &nbsp;Sign In</a>
					</div>
					<br>
					<hr>
					<div class="text-center p-t-30 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google" aria-hidden="true"></i>
						</a>

					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url('assets/auth/images/bg_icon.jpg'); ?>">
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