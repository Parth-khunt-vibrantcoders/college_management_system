<?php

include('config/constants.php');
include('config/db_conn.php');
include('includes/check_auth_user.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Dashboard';
?>

<?php

include('includes/header.php');
?>

<body class="bg-theme bg-theme1">
	<!-- wrapper -->
	<div class="wrapper">
	
		<?php
            include('includes/sidebar.php');
            include('includes/body_header.php');
        ?>
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">649 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-cart-alt"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Item Delivered</p>
										</div>
										<div class="ml-auto font-14 text-white">+23.4%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">114 <i class='bx bxs-down-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-support"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Refund Request</p>
										</div>
										<div class="ml-auto font-14 text-white">+14.7%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">98 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-tachometer"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Cancelled Orders</p>
										</div>
										<div class="ml-auto font-14 text-white">-12.9%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">208 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-user"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">New Users</p>
										</div>
										<div class="ml-auto font-14 text-white">+13.6%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        <?php
            include('includes/body_footer.php');
        ?>
	</div>
	
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/js/index2.js"></script>
	<!-- App JS -->
	<script src="assets/js/app.js"></script>
</body>
</html>