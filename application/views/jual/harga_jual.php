<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="far fa-circle"></i></i> Harga Jual</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h5">
                     Harga Jual : <br>
                     -- Semua stok dihitung eceran = 1. <br>
                     -- Stok satuan hanya untuk item yang dikemas sendiri. <br>
                     -- Isi satuan pembagian dari eceran ke satuan. <br>
                     -- Harga satuan dihitung per kilogram, liter, meter dan meterpersegi.

                  </div>
               </div>
               <!-- search -->
               <div class="mr-3 float-right">
                  <?= form_open(base_url('jual_harga_jual/search'), ['method' => 'POST']) ?>
                  <div class="input-group">
                     <input type="text" name="keyword" class="form-control form-control-sm" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                     <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary btn-sm">
                           <i class="fas fa-search"></i>
                        </button>
                        <a href="<?= base_url('sett_harga_jual/reset') ?>" class="btn btn-secondary btn-sm">
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
      <!-- #################### harga jual ################################################ -->
      <div class="mt-n3 col-md">
         <!-- ########## form tambah harga jual ########## -->
         <div class="card-header border-transparent bg-info">
            <?= form_open('', ['method' => 'POST']) ?>
            <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
            <div class="mb-n3 row">
               <div class="col-md-4">
                  <div class="form-group">
                     <?= form_input('barcode', $input->barcode, ['class' => 'form-control', 'name' => 'barcode', 'placeholder' => 'Barcode']) ?>
                     <?= form_error('barcode') ?>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <input type="file" name="foto" class="custom-file-input form-control">
                     <!-- untuk menampilkan nama file yang kita pilih - jquery di footer -->
                     <label class="custom-file-label" for="foto" placeholder="">Pilih Foto</label>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <?= form_input('item', $input->item, ['class' => 'form-control', 'name' => 'item', 'placeholder' => 'Item']) ?>
                     <?= form_error('item') ?>
                  </div>
               </div>

               <!-- grosir -->
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('isi_grosir', $input->isi_grosir, ['class' => 'form-control', 'name' => 'isi_grosir', 'placeholder' => 'Isi Grosir']) ?>
                     <?= form_error('isi_grosir') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('harga_grosir', $input->harga_grosir, ['class' => 'form-control', 'name' => 'harga_grosir', 'placeholder' => 'Harga Grosir']) ?>
                     <?= form_error('harga_grosir') ?>
                  </div>
               </div>
               <!-- eceran -->
               <div class="col-md-1">
                  <div class="form-group">
                     <?= form_input('isi_eceran', $input->isi_eceran, ['class' => 'form-control', 'name' => 'isi_eceran', 'value' => 1, 'placeholder' => '', 'readonly' => true]) ?>
                     <?= form_error('isi_eceran') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('harga_eceran', $input->harga_eceran, ['class' => 'form-control', 'name' => 'harga_eceran', 'placeholder' => 'Harga Eceran']) ?>
                     <?= form_error('harga_eceran') ?>
                  </div>
               </div>
               <!-- satuan -->
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('isi_satuan', $input->isi_satuan, ['class' => 'form-control', 'name' => 'isi_satuan', 'placeholder' => 'Isi Satuan']) ?>
                     <?= form_error('isi_satuan') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('harga_satuan', $input->harga_satuan, ['class' => 'form-control', 'name' => 'harga_satuan', 'placeholder' => 'Harga Satuan']) ?>
                     <?= form_error('harga_satuan') ?>
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

         <!-- ########## tabel harga jual ########## -->
         <div class="card-body p-0">
            <table class="table table-hover">
               <thead>
                  <tr class="border">
                     <th width="50px">Image</th>
                     <th>Barcode</th>
                     <th>Item</th>
                     <th>Isi G</th>
                     <th>Harga Grosir</th>
                     <th>Isi E</th>
                     <th>Harga Eceran</th>
                     <th>Isi S</th>
                     <th>Harga Satuan</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($content as $ct) : ?>
                     <tr>
                        <td><?= $ct->image ?></td>
                        <td><?= $ct->barcode ?></td>
                        <td><?= $ct->item ?></td>
                        <td><?= $ct->isi_grosir ?></td>
                        <td><?= $ct->harga_grosir ?></td>
                        <td><?= $ct->isi_eceran ?></td>
                        <td><?= $ct->harga_eceran ?></td>
                        <td><?= $ct->isi_satuan ?></td>
                        <td><?= $ct->harga_satuan ?></td>
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