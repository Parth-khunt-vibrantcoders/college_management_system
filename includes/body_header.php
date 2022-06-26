<!--header-->
<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
			
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						
						
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0"><?= $_SESSION['first_name'] ?> <?= $_SESSION['last_name'] ?></p>										
									</div>
									<img src="assets/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								
								<div class="dropdown-divider mb-0"></div>	
                                <a class="dropdown-item" href="logout.php">
                                    <i class="bx bx-power-off"></i><span>Logout</span>
                                </a>
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->