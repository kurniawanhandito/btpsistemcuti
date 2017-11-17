<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>BTP Sistem Cuti | Dashboard</title>
	<!-- Icon -->
	<link rel="icon" href="<?php echo base_url('asset/img/icon.png');?>" />
	<!-- Bootstrap core CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css');?>" />
	<!-- Custom fonts for this template-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css');?>" />
	<!-- Custom styles for this template-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/sb-admin.css');?>" />
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="index.html"><?php echo $nama; ?></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
					<a class="nav-link" href="index.html">
						<i class="fa fa-fw fa-dashboard"></i>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
					<a class="nav-link" href="charts.html">
						<i class="fa fa-fw fa-area-chart"></i>
						<span class="nav-link-text">Charts</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="tables.html">
						<i class="fa fa-fw fa-table"></i>
						<span class="nav-link-text">Tables</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-wrench"></i>
						<span class="nav-link-text">Components</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents">
						<li>
							<a href="navbar.html">Navbar</a>
						</li>
						<li>
							<a href="cards.html">Cards</a>
						</li>
					</ul>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-file"></i>
						<span class="nav-link-text">Example Pages</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseExamplePages">
						<li>
							<a href="login.html">Login Page</a>
						</li>
						<li>
							<a href="register.html">Registration Page</a>
						</li>
						<li>
							<a href="forgot-password.html">Forgot Password Page</a>
						</li>
						<li>
							<a href="blank.html">Blank Page</a>
						</li>
					</ul>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-sitemap"></i>
						<span class="nav-link-text">Menu Levels</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseMulti">
						<li>
							<a href="#">Second Level Item</a>
						</li>
						<li>
							<a href="#">Second Level Item</a>
						</li>
						<li>
							<a href="#">Second Level Item</a>
						</li>
						<li>
							<a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
							<ul class="sidenav-third-level collapse" id="collapseMulti2">
								<li>
									<a href="#">Third Level Item</a>
								</li>
								<li>
									<a href="#">Third Level Item</a>
								</li>
								<li>
									<a href="#">Third Level Item</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
					<a class="nav-link" href="#">
						<i class="fa fa-fw fa-link"></i>
						<span class="nav-link-text">Link</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-bell"></i>
						<span class="d-lg-none">Alerts
							<span class="badge badge-pill badge-warning">6 New</span>
						</span>
						<span class="indicator text-warning d-none d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="alertsDropdown">
						<h6 class="dropdown-header">New Alerts:</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-success">
								<strong>
									<i class="fa fa-long-arrow-up fa-fw"></i>Status Update
								</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-danger">
								<strong>
									<i class="fa fa-long-arrow-down fa-fw"></i>Status Update
								</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-success">
								<strong>
									<i class="fa fa-long-arrow-up fa-fw"></i>Status Update
								</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item small" href="#">View all alerts</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-fw fa-sign-out"></i>Logout
					</a>
				</li>
			</ul>
		</div>
	</nav>	

	<?php echo $content; ?>

	<?php echo $footer; ?>