<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title><?= isset($title) ? $title : 'UKM Kasir' ?> | KomunitascodinG</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
   <!-- register -->
   <div class="col-md-12 hold-transition register-page">
      <div class="register-box">
         <!-- <div class="card-body register-card-body"> -->
         <h5 class="login-box-msg">Registrasi</h5>

         <form action="<?php base_url('auth/registrasi'); ?>" method="POST">
            <div class="input-group">
               <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>" placeholder="Nama Lengkap" autofocus>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-user"></span>
                  </div>
               </div>
            </div>
            <?= form_error('name'); ?>
            <div class="input-group mt-3">
               <input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="Username min 4 karakter">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-user-cog"></span>
                  </div>
               </div>
            </div>
            <?= form_error('username'); ?>
            <div class="input-group mt-3">
               <input type="password" name="password" class="form-control" placeholder="Password min 8 karakter">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <?= form_error('password'); ?>
            <div class="input-group mt-3">
               <input type="password" name="password1" class="form-control" placeholder="Konfirmasi Password ">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <?= form_error('password1'); ?>
            <div class="row">
               <div class="mt-3 col-12">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
               </div>
            </div>
         </form>
         <hr>
         <a href="<?= base_url('auth') ?>" class="text-center">Login</a>
      </div>
      <!-- /.form-box -->
   </div>
   <!-- akhir register -->


   <!-- Bootstrap 4 -->
   <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
</body>

</html>