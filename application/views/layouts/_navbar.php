<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-secondary navbar-dark fixed">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
        </li> -->
        <!-- ########## menu kasir ########## -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                KASIR
            </a>
            <!-- Dropdown info -->
            <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="userDropdown">
                <a href="<?= base_url('profile'); ?>" class="dropdown-item"><i class="fas fa-fw fa-cash-register mr-2"></i>KASIR</a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url(''); ?>" class="dropdown-item"><i class="fas fa-fw fa-money-bill-wave mr-2"></i></i>Pembelian</a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url(''); ?>" class="dropdown-item"><i class="fas fa-fw fa-undo-alt mr-2"></i></i>retur</a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url(''); ?>" class="dropdown-item"><i class="far fa-fw fa-trash-alt mr-2"></i></i>Rusak</a>
            </div>
        </li>
        <!-- ### akhir menu kasir ### -->
    </ul>

    <!-- Right navbar links -->
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
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $this->session->userdata('name') ?>
                <i class="fas fa-fw fa-lock"></i>
            </a>
            <!-- Dropdown info -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a href="<?= base_url('profile'); ?>" class="dropdown-item"><i class="fas fa-user fa-sm fa-fw mr-2"></i>Profile</a>
                <div class="dropdown-divider"></div>
                <?php if (!$this->session->userdata('is_login')) : ?>
                    <a href="<?= base_url('register'); ?>" class="dropdown-item"><i class="far fa-fw fa-registered mr-2"></i>Register</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('login'); ?>" class="dropdown-item"><i class="fas fa-fw fa-sign-in-alt mr-2"></i>LOGIN</a>
                    <div class="dropdown-divider"></div>
                <?php endif ?>
                <!-- logout diarahkan ke login/logout -->
                <a href="<?= base_url('logout'); ?>" class="dropdown-item" type="submit" onclick="return confirm('Yakin logout? Apa tidak ada yang tertinggal?')"><i class="fas fa-fw fa-sign-out-alt mr-2"></i>LOGOUT</a>
            </div>
        </li>
        <!-- ### akhir login/logout ### -->

        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li> -->
    </ul>
</nav>
<!-- akhir navbar -->