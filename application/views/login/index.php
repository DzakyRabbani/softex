<!DOCTYPE html>
<html lang="en">

<head>
	<title>Softex Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo/ICON.png') ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animate/animate.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/animsition/css/animsition.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/select2/select2.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/main.css') ?>">
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/dist/sweetalert2.min.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/sweetalert2.css') ?>">

</head>

<body>


	<div class="limiter">
		<div class="container-login100" style="background-color: #228B22;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<form id="form_login" class="login100-form validate-form" method="post" action="<?php echo base_url('LoginController/login') ?>">
					<span class="login100-form-title p-b-30 animated fadeInDown" style="font-family: sans-serif;font-size: 300%;margin-top: -10%">
						<img width="40%" src="<?php echo base_url('assets/img/logo/ICON.png') ?>" alt=""><br>
						<!-- <i>Newsletter</i> -->
					</span>

					<div class="wrap-input100 validate-input m-b-23 animated fadeInLeft" data-validate="Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" id="username" name="username" placeholder="Type your username" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input animated fadeInRight" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 " type="password" id="password" name="password" placeholder="Type your password" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<!-- <a href="#">
							Forgot password?
						</a> -->
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn animated fadeInUp">
							<div class="login100-form-bgbtn"></div>
							<button onclick="log()" id="btnlogin" style="background-color:#228B22" type="submit" class="login100-form-btn" name="btnlogin">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-20 p-b-0">
						<span>

						</span>
					</div>

					<!-- <div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div> -->

					<div class="txt1 text-center p-t-20 animated fadeInUp">
						<br>
						<span style="font-size: 140%">
							<!-- @ <?php echo date('Y') ?> WIR GROUP -->
							AR&CO
						</span>

					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script>
		function log() {

			$('#btnlogin').text("Proses...");
			$('#btnlogin').attr('disabled', true);

			$.ajax({
				url: "<?php echo base_url('LoginController/Login') ?>",
				type: "POST",
				data: $("#form_login").serialize(),
				dataType: "JSON",
				success: function(data) {
					if (data.stat == true) {
						swal({
							type: 'success',
							title: 'Success',
							text: 'Success',
							// showConfirmButton: false
						}).then(function() {
							// setTimeout(function () {
							window.location.href = 'dashboard';
							// },1150); 
						});

					} else {
						swal({
							type: 'error',
							title: 'Failed',
							text: 'Username Or Password Wrong',
							// showConfirmButton: false
						}).then(function() {
							window.location.href = 'control2019';
						});
					}
				}
			})
		}
	</script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/animsition/js/animsition.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/select2/select2.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/daterangepicker/daterangepicker.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/vendor/countdowntime/countdowntime.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/js/main.js') ?>"></script>

</body>

</html>