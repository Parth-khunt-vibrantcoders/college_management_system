	<!--sidebar-wrapper-->
    <div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Syntrans</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
			
				
				<li class="<?= (isset($title) && $title == 'Dashboard') ? 'mm-active' : ''?>">
					<a href="dashboard.php">
						<div class="parent-icon"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->