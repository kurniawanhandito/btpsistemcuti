<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
	  	<title>BTP Sistem Cuti | Login</title>
	  	<!-- Icon -->
		<link rel="icon" href="<?php echo base_url('asset/img/icon.png');?>" />
	  	<!-- Bootstrap core CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css');?>" />
		<!-- Custom fonts for this template-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css');?>" />
		<!-- Custom styles for this template-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/sb-admin.css');?>" />
	</head>
	<body class="bg-dark">
	  	<div class="container">
	  		<?php echo $this->session->flashdata('pesan'); ?>
		    <div class="card card-login mx-auto mt-5">
	      		<div class="card-header">Login Sistem Cuti</div>
	  			<div class="card-body">
	        		<form action="<?php echo base_url('login/do_login'); ?>" method="POST" role="form">
	      				<div class="form-group">
	        				<label for="lblNIP">NIP</label>
	        				<input class="form-control" placeholder="NIP" name="nip" type="number" required="true" autofocus>
	      				</div>
	      				<div class="form-group">
	        				<label for="lblPassword">Password</label>
	        				<input class="form-control" placeholder="Password" name="password" required="true" type="password">
	      				</div>
	      				<button value="login" type="submit" class="btn btn-primary btn-block">Login</button>
	    			</form>
	    			<div class="text-center">
			          	<a class="d-block small" href="forgot-password.html">Forgot Password?</a>
			        </div>
	  			</div>
	    	</div>
		</div>

	  	<!-- Bootstrap core JavaScript-->
		<script type="text/javascript" src="<?php echo base_url('asset/vendor/jquery/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('asset/vendor/popper/popper.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

		<!-- Core plugin JavaScript-->
		<script type="text/javascript" src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
	</body>
</html>
