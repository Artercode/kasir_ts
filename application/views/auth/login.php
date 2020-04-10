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
   <!-- login -->
   <div class="col-md-12 hold-transition login-page">
      <div class="mt-n5 login-box">
         <!-- <div class="card-body login-card-body rounded"> -->
         <h5 class="login-box-msg">UKM Kasir</h5>
         <?= $this->session->flashdata('message'); ?>

         <form action="<?= base_url('auth') ?>" method="POST">
            <div class="input-group">
               <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="Username" autofocus>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
            </div>
            <?= form_error('username', '<small class="text-danger font-italic">', '</small>'); ?>
            <div class="input-group mt-3">
               <input type="text" name="password" class="form-control" placeholder="Password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <?= form_error('password', '<small class="text-danger font-italic">', '</small>'); ?>
            <div class="row">
               <div class="mt-3 col-12">
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
               </div>
            </div>
         </form>
         <h6 class="text-center">email : ceo@mail.com - password : 12341234</h6>
         <h6 class="text-center">email : kabag@mail.com - password : 12341234</h6>
         <h6 class="text-center">Username : dimas - password : 12341234</h6>
         <hr>
         <p class="mb-1">
            <a href="<?= base_url('auth/lupa_password') ?>">Lupa password</a>
         </p>
         <p class="mb-0">
            <a href="<?= base_url('auth/registrasi') ?>" class="text-center">Registrasi</a>
         </p>
      </div>
   </div>
   <!-- akhir login -->


   <!-- Bootstrap 4 -->
   <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
</body>

</html>