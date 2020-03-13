<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= isset($title) ? $title : 'AdminLTF 3' ?> | KomunitascodinG</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
	<div class="mt-n5 register-box">
		<div class="register-logo">
			<a href="assets/index2.html">Kasir<b>TS</b></a>
		</div>
		<!-- ########## card ########## -->
		<div class="card">
			<div class="card-body register-card-body rounded">
				<p class="login-box-msg">Daftar Baru</p>

				<form action="" method="post">
					<!-- name -->
					<div class="input-group">
						<input type="text" name="name" id="name" class="form-control" placeholder="Name Lengkap" value="<?= set_value('name'); ?>" autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('name') ?>
					<!-- username -->
					<div class="mt-3 input-group">
						<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('username') ?>
					<!-- password -->
					<div class="mt-3 input-group">
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('password') ?>
					<!-- password1 -->
					<div class="mt-3 input-group">
						<input type="password1" name="password1" id="password1" class="form-control" placeholder="Ulang Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('password1') ?>
					<!-- tombol & link -->
					<div class="row">
						<div class="mt-3 col-12">
							<button type="submit" class="btn btn-primary btn-block">Daftar</button>
						</div>
					</div>
					<div class="mt-2 text-center">
						<a href="http://komunitascoding.com/" target="_blank"><b>KomunitascodinG</b></a>
					</div>
				</form>
			</div>
		</div>
		<!-- ### akhir card ### -->
	</div>
	<!-- jQuery -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>