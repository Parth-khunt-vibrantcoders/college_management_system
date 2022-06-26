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
	<title><?= PROJJECT_NAME ?> || Register</title>
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
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Create an Account</h3>
									</div>
									
									<div class="login-separater text-center"> <span>REGISTER WITH EMAIL</span>
										<hr/>
									</div>
                                    <form method="POST" action="register_user.php" id="register-user">
                                    <?php include('includes/flash_message.php') ?>

                                        <div class="form-group mt-4">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" name="email" placeholder="Please enter your email" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''?>"/>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="first_name" placeholder="Please enter your first name" value="<?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''?>"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="last_name" placeholder="Please enter your last name" value="<?= isset($_SESSION['last_name']) ? $_SESSION['last_name'] : ''?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>                                            
                                            <input class="form-control border-right-0" type="password" id="password" name="password" placeholder="Please enter password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Confirm Password</label>                                            
                                            <input class="form-control border-right-0" type="password" name="confirm_password" placeholder="Please enter confirm password">
                                            
                                        </div>
                                        
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-light btn-block">Register</button>
                                            </button>
                                        </div>
                                    </form>
									<hr/>
									<div class="text-center mt-4">
										<p class="mb-0">Already have an account? <a href="index.php">Login</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="assets/images/login-images/register-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/customjs/register.js"></script>
	<!--Password show & hide js -->
	
</body>


<!-- Mirrored from codervent.com/syntrans/demo/vertical/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 04:54:55 GMT -->
</html>