<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-secondary navbar-dark fixed">
	<!-- link navbar kiri -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item">
			<a class="h2 my-n2 text-light" href="#"><?= $title ?></a>
		</li>

	</ul>

	<!-- link navbar kanan -->
	<ul class="navbar-nav ml-auto">
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="far fa-bell"></i>
				<span class="badge badge-warning navbar-badge">15</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<span class="dropdown-item dropdown-header">15 Notifications</span>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-envelope mr-2"></i> 4 new messages
					<span class="float-right text-muted text-sm">3 mins</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-users mr-2"></i> 8 friend requests
					<span class="float-right text-muted text-sm">12 hours</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-file mr-2"></i> 3 new reports
					<span class="float-right text-muted text-sm">2 days</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
			</div>
		</li>

		<!-- ########## login/logout ########## -->
		<li class="mr-n3 nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="ml-2 fas fa-ellipsis-v"></i>
			</a>
			<!-- Dropdown info -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a href="<?= base_url('pegawai/data_pegawai'); ?>" class="dropdown-item"><i class="fas fa-user fa-sm fa-fw mr-2"></i>MENU</a>
				<div class="dropdown-divider"></div>
				<a href="<?= base_url('auth/logout'); ?>" class="dropdown-item" type="submit" onclick="return confirm('Yakin logout? Apa tidak ada yang tertinggal?')"><i class="fas fa-fw fa-sign-out-alt mr-2"></i>LOGOUT</a>
			</div>
		</li>

		<!-- ########## info ########## -->
		<li class="nav-item">
			<a class="h3 my-n1 nav-link" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-exclamation-circle"></i>
			</a>
			<!-- Dropdown info -->
			<div class="mr-4 mt-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<div class="h5 ml-3">
					test
				</div>
			</div>
		</li>


		<!-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li> -->
	</ul>
</nav>
<!-- akhir navbar -->