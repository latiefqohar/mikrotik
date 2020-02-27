<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mikrotik Remote</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">


	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/selectFX/css/cs-skin-elastic.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/assets/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


	<div class="sufee-login d-flex align-content-center flex-wrap">
		<div class="container">
			<div class="login-content">
				<div class="login-form">
					<div style="margin: auto;width: 50%;padding: 10px;">
						<img class="align-center" src="<?= base_url(); ?>assets/admin/images/mikrotik.png">
					</div>

					<form action="<?= base_url(); ?>Api/aksiLogin" method="POST">
						<div class="form-group">
							<label>IP</label>
							<input type="text" class="form-control" name="ip" placeholder="masukkan ip">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="user" placeholder="masukkan username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="masukkan Password">
						</div>
						<button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
						<div class="register-link m-t-15 text-center">
							<p>Don't have account ? <a href="#"> Sign Up Here</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<script src="<?= base_url(); ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/assets/js/main.js"></script>


</body>

</html>
