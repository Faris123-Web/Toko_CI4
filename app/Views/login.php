<!doctype html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
	
	<link rel="stylesheet" href="<?= base_url('assets/css/style1.css') ?>">

</head>
<body class="img" style="background-image: url(<?= base_url('assets/img/background.jpg') ?>)">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-2">
					<img src="<?= base_url('assets/img/logo.png')?>" width="20%" height="55%">
					<h2 class="heading-section"><b>SIGN IN</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">
							<?= view('Myth\Auth\Views\_message_block') ?>
							<form action="<?= route_to('login') ?>" method="post" class="signin-form">
								<?= csrf_field() ?>
<?php if ($config->validFields === ['email']): ?>
								<div class="form-group">
									<label for="login" class="form-label"><b><?=lang('Auth.email')?></b></label>
									<span class="fas fa-envelope field-icon2"></span>
									<input type="email" class="form-control pl-5" name="login"  required>
									<div class="invalid-feedback">
										<?= session('errors.login') ?>
									</div>
								</div>
<?php else: ?>
								<div class="form-group">
									<label for="login" class="form-label"><b><?=lang('Auth.emailOrUsername')?></b></label>
									<span class="fas fa-envelope field-icon2"></span>
									<input type="text" class="form-control pl-5" name="login"  required>
									<div class="invalid-feedback">
										<?= session('errors.login') ?>
									</div>
								</div>
<?php endif; ?>
								<div class="form-group">
									<label for="password" class="form-label"><b><?=lang('Auth.password')?></b></label>
									<span class="fas fa-key field-icon2"></span>
									<input id="password-field" type="password" class="form-control pl-5" name="password" required>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									<div class="invalid-feedback">
										<?= session('errors.password') ?>
									</div>
								</div>
								<!-- <div class="w-50 text-md-right">
									<a href="#" style="color: grey">Forgot Password ?</a>
								</div> -->
								<div class="form-group">
									<button type="submit" class="btn btn-primary submit px-2"><?=lang('Auth.loginAction')?></button>
								</div>
							</form>
							<p class="w-100 text-center" style="color: black;"><?=lang('Auth.needAnAccount')?> 
								<span><a href="<?= route_to('register') ?>" style="color: #000080">&ensp;Sign Up</a></span>
							</p>
							<hr>
							<p class="w-100 text-center" style="color: grey;">Or sign in with</p>
	          <!-- <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> -->
	          <div class="row ml-5 text-center">
	          	<div class="col-md-2 ml-4 "> 
	          		<a href="#" class="btn-face">
	          			<img src="<?= base_url('assets/img/icons/face.png') ?>"  alt="FACEBOOK">
	          		</a>
	          	</div>
	          	<div class="col-md-2 ml-5">
	          		<a href="#" class="btn-google">
	          			<img src="<?= base_url('assets/img/icons/icon-google.png') ?>"  alt="GOOGLE">
	          		</a>
	          	</div>
	          </div>
	      </div>
	  </div>
	</div>
</div>
</div>
</section>

<script src="<?= base_url('assets/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/popper.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
<script src="<?= base_url('assets/main.js') ?>"></script>
</body>
</html>

