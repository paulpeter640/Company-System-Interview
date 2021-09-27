<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Company System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png">

	<!-- Treeview css -->
	<link href="<?php echo base_url() ?>assets/libs/treeview/style.css" rel="stylesheet" type="text/css" />

	<!-- dropify -->
	<link href="<?php echo base_url() ?>assets/libs/dropify/dropify.min.css" rel="stylesheet" type="text/css" />

	<!-- Sweet Alert-->
	<link href="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

	<!-- Custom box css -->
	<link href="<?php echo base_url() ?>assets/libs/custombox/custombox.min.css" rel="stylesheet">

	<!-- Plugins css -->
	<link href="<?php echo base_url() ?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url() ?>assets/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/libs/switchery/switchery.min.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- third party css -->
	<link href="<?php echo base_url() ?>assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
	<!-- third party css end -->

	<!-- Notification css (Toastr) -->
	<link href="<?php echo base_url() ?>assets/libs/toastr/toastr.min.css" rel="stylesheet" type="text/css" />

	<!-- App css -->
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

	<!-- POPI css -->
	<link href="<?php echo base_url() ?>assets/css/popi.css" rel="stylesheet" type="text/css" />

	<!-- jquery -->
	<script src="<?php echo base_url() ?>assets/js/jquery.js" referrerpolicy="origin"></script>

	<!-- Validator -->
	<script src="<?php echo base_url() ?>assets/js/validator.js" referrerpolicy="origin"></script>
	<style>
		#pageloader {
			background: rgba(255, 255, 255, 0.8);
			display: none;
			height: 100%;
			position: fixed;
			width: 100%;
			z-index: 9999;
		}

		#pageloader img {
			left: 50%;
			margin-left: -32px;
			margin-top: -32px;
			position: absolute;
			top: 40%;
		}

		.text-subtitle {
			color: green !important;
		}
	</style>

</head>

<body>
	<div id="pageloader">
		<img height="200" width="200" src="<?php echo base_url() ?>assets/images/loader.gif" alt="Processing..." />
	</div>
	<!-- Begin page -->
	<div id="wrapper">

		<!-- Topbar Start -->
		<div class="navbar-custom">
			<ul class="list-unstyled topnav-menu float-right mb-0">

				<!-- <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li> -->

				<!-- <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-right">
                                    <a href="" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li> -->

				<li class="dropdown notification-list">
					<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<img src="<?php echo base_url() ?>assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
						<span class="pro-user-name ml-1">
							<?php echo (isset($_SESSION['int_user']) ? $_SESSION['int_user']['USER_NAME'] : '') ?> <i class="mdi mdi-chevron-down"></i>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<!-- item-->
						<div class="dropdown-header noti-title">
							<h6 class="text-overflow m-0">Welcome !</h6>
						</div>

						<!-- item-->


						<!-- item-->
						<!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a> -->

						<!-- item-->
						<!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a> -->

						<div class="dropdown-divider"></div>

						<!-- item-->
						<a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item notify-item">
							<i class="fe-log-out"></i>
							<span>Logout</span>
						</a>

					</div>
				</li>

				<!-- <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li> -->


			</ul>

			<!-- LOGO -->
			<div class="logo-box">
				<a href="#" class="logo text-center">
					<span class="logo-lg">
						<!-- <img src="<?php echo base_url() ?>assets/images/LogoPNG.png" alt="" height="60"> -->

					</span>

					<span class="logo-sm">
						<!-- <span class="logo-sm-text-dark">X</span> -->
						<!-- <img src="<?php echo base_url() ?>assets/images/logo-dark.png" alt="" height="24"> -->
					</span>
				</a>

			</div>

			<ul class="list-unstyled topnav-menu topnav-menu-left m-0">
				<li>
					<button class="button-menu-mobile waves-effect">
						<i class="fe-menu"></i>
					</button>
				</li>

				<li>
					<h4 class="page-title-main"><?php echo $header['title'] ?></h4>
				</li>

			</ul>
		</div>
		<!-- end Topbar -->

		<!-- ========== Left Sidebar Start ========== -->
		<div class="left-side-menu">

			<div class="slimscroll-menu">

				<!-- User box -->
				<!-- <div class="user-box text-center">
					<img src="<?php echo base_url() ?>assets/images/users/user-1.jpg" alt="user-img" title="<?php echo (isset($_SESSION['int_user']) ? $_SESSION['int_user']['FULL_NAME'] : '') ?>" class="rounded-circle img-thumbnail avatar-lg">
					<div class="dropdown">
						<a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"><?php echo (isset($_SESSION['int_user']) ? $_SESSION['int_user']['FULL_NAME'] : '') ?></a>
						<div class="dropdown-menu user-pro-dropdown">
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-user mr-1"></i>
								<span>My Account</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-settings mr-1"></i>
								<span>Settings</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-lock mr-1"></i>
								<span>Lock Screen</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-log-out mr-1"></i>
								<span>Logout</span>
							</a>

						</div>
					</div>
					<p class="text-muted"><?php echo $_SESSION['int_user']['JOB_TITLE'] ?></p>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="<?php echo base_url('auth/login') ?>" class="text-custom">
								<i class="mdi mdi-power"></i>
							</a>
						</li>
					</ul>
				</div> -->

				<!--- Sidemenu -->
				<div id="sidebar-menu">

					<div id="sidebar-menu">

						<ul class="metismenu" id="side-menu">

							<li class="menu-title">Navigation</li>

							<li>
								<a href="./">
									<i class="mdi mdi-view-dashboard"></i>
									<span> Dashboard </span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url() ?>dashboard/ra">
									<i class="mdi mdi-format-font"></i>
									<span> Registered for Agency </span>
								</a>
							</li>



							<li>
								<a href="<?php echo base_url() ?>dashboard/bc">
									<i class="mdi mdi-calendar"></i>
									<span> Book Customer </span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url() ?>dashboard/vs">
									<i class="mdi mdi-email"></i>
									<span> Verify Sale </span>
								</a>
							</li>

						</ul>

					</div>

				</div>
				<!-- End Sidebar -->

				<div class="clearfix"></div>

			</div>
			<!-- Sidebar -left -->

		</div>
		<!-- Left Sidebar End -->

		<!-- ============================================================== -->
		<!-- Start Page Content here -->
		<!-- ============================================================== -->

		<!--  Modal content for the above example -->

		<div class="modal fade user-account-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myLargeModalLabel">User Profile</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">

						<div class="bg-picture card-box">
							<div class="profile-info-name">
								<img src="<?php echo base_url('assets/images/users/user-1.jpg') ?>" class="rounded-circle avatar-xl img-thumbnail float-left mr-3" alt="profile-image">

								<div class="profile-info-detail overflow-hidden">
									<h4 class="m-0"><?php echo $_SESSION['int_user']['FULL_NAME']; ?></h4>
									<p class="text-muted"><i><?php echo $_SESSION['int_user']['USER_NAME']; ?></i></p>

									<table class="" cellpadding="8">

										<tr>
											<th>Department/Branch</th>
											<td><?php echo $_SESSION['int_user']['DUTY_STATION']; ?></td>
										</tr>

										<tr>
											<th>Job Position</th>
											<td><?php echo $_SESSION['int_user']['JOB_TITLE']; ?></td>
										</tr>
										<tr>
											<th>PF. Number</th>
											<td><?php echo $_SESSION['int_user']['PF_NUMBER']; ?></td>
										</tr>

									</table>


									<ul class="social-list list-inline mt-3 mb-0">
										<li class="list-inline-item">
											<a title="Email : <?php echo $_SESSION['int_user']['EMAIL'] ?>" data-toggle="tooltip" href="mailto:<?php echo $_SESSION['int_user']['EMAIL'] ?>" class="social-list-item border-purple text-purple"><i class="mdi mdi-email-plus "></i></a>
										</li>

									</ul>

								</div>

								<div class="clearfix"></div>
							</div>
						</div>

					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->





		<div class="content-page">
			<div class="content">

				<!-- Start Content-->
				<div class="container-fluid">
					<?php
					if (isset($_SESSION['int_error'])) {
						echo '
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                ' . $_SESSION['int_error'] . '
                            </div>
                            ';
						unset($_SESSION['int_error']);
					} elseif (isset($_SESSION['int_success'])) {
						# code...
					} elseif (isset($_SESSION['int_info'])) {
						# code...
					} elseif (isset($_SESSION['int_warning'])) {
						# code...
					}
					?>