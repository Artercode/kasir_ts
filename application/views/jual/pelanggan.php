<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="far fa-circle"></i></i> Pelanggan - <?= $this->jual_pelanggan->count(); ?> Orang</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h5">
                     Pelanggan : <br>

                  </div>
               </div>
               <!-- search -->
               <div class="mr-3 float-right">
                  <?= form_open(base_url('Jual_pelanggan/search'), ['method' => 'POST']) ?>
                  <div class="input-group">
                     <input type="text" name="keyword" class="form-control form-control-sm" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                     <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary btn-sm">
                           <i class="fas fa-search"></i>
                        </button>
                        <a href="<?= base_url('Jual_pelanggan/reset') ?>" class="btn btn-secondary btn-sm">
                           <i class="fas fa-eraser"></i>
                        </a>
                     </div>
                  </div>
                  <?= form_close() ?>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <div class="container-fluid">
      <?php $this->view('layouts/alert') ?>
      <!-- #################### pelanggan ################################################ -->
      <div class="mt-n3 col-md">
         <!-- ########## form tambah pelanggan ########## -->
         <div class="card-header border-transparent bg-info">
            <?= form_open('', ['method' => 'POST']) ?>
            <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
            <div class="mb-n3 row">
               <div class="col-md-3">
                  <div class="form-group">
                     <?= form_input('nama', $input->nama, ['class' => 'form-control', 'name' => 'nama', 'placeholder' => 'Nama Lengkap']) ?>
                     <?= form_error('nama') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('alamat', $input->alamat, ['class' => 'form-control', 'name' => 'alamat', 'placeholder' => 'Alamat']) ?>
                     <?= form_error('alamat') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('kelurahan', $input->kelurahan, ['class' => 'form-control', 'name' => 'kelurahan', 'placeholder' => 'Kelurahan']) ?>
                     <?= form_error('kelurahan') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('kota', $input->kota, ['class' => 'form-control', 'name' => 'kota', 'placeholder' => 'Kota']) ?>
                     <?= form_error('kota') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('phone', $input->phone, ['class' => 'form-control', 'name' => 'phone', 'placeholder' => 'Phone']) ?>
                     <?= form_error('phone') ?>
                  </div>
               </div>
               <!-- tambah -->
               <div class="col-md-1">
                  <div class="form-group">
                     <a type="submit" class="h2 float-right">
                        <i class="far fa-plus-square"></i>
                     </a>
                  </div>
               </div>
            </div>
            <?= form_close() ?>
         </div>

         <!-- ########## tabel pelanggan ########## -->
         <div class="card-body p-0">
            <table class="table table-hover">
               <thead>
                  <tr class="border">
                     <th>Nama</th>
                     <th>Alamat</th>
                     <th>Kelurahan</th>
                     <th>Kota</th>
                     <th>Phone</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($content as $ct) : ?>
                     <tr>
                        <!-- <td width="50px"><?= $ct->image ?></td> -->
                        <td><?= $ct->nama ?></td>
                        <td><?= $ct->alamat ?></td>
                        <td><?= $ct->kelurahan ?></td>
                        <td><?= $ct->kota ?></td>
                        <td><?= $ct->phone ?></td>
                        <td class="text-right">
                           <a href="" type="submit" class="h5 mb-n2">
                              <i class="text-info far fa-edit"></i>
                           </a>
                           <a type="submit" class="h5 mb-n2 ml-3" onclick="return confirm('Apakah yakin ingin menghapus?')">
                              <i class="text-red far fa-trash-alt"></i>
                           </a>
                        </td>
                     </tr>
                  <?php endforeach ?>
               </tbody>
            </table>

            <nav class="mt-3 mb-n3" aria-label="Page navigation example">
               <!-- $pagination method di controller, routes, dan [136]MY_Modal.php -->
               <?= $pagination ?>
            </nav>
         </div>
      </div>
      <!-- akhir harga jual -->
   </div>
</div>