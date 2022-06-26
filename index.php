<?php
include('config/constants.php');
include('config/db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title><?= PROJJECT_NAME ?> || Login</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="bg-theme bg-theme1">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Welcome Back</h3>
									</div>
									
									<div class="login-separater text-center"> <span>LOGIN WITH EMAIL</span>
										<hr/>
									</div>

									<?php include('includes/flash_message.php') ?>
									

									<form method="POST" action="auth-check.php" id="login-check">
									<div class="form-group mt-4">
										<label>Email Address</label>
										<input type="text" class="form-control" name="email" placeholder="Enter your email address" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''?>"/>
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" placeholder="Enter your password" />
									</div>
									
									<div class="btn-group mt-3 w-100">
										<button type="submit" class="btn btn-light btn-block">Log In</button>										
										</button>
									</div>
									</form>
									<hr>
									<div class="text-center">
										<p class="mb-0">Don't have an account? <a href="register.php">Sign up</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/customjs/login.js"></script>
</body>
</html>