<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <a id="info" data-toggle="dropdown" class="h2 text-info back-to-top" href="">
      <i class="fas fa-exclamation-circle"></i>
   </a>
   <!-- Dropdown info -->
   <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
      <div class="h5">
         Pembelian : <br>

      </div>
   </div>
   <!-- <a id="back-to-top" href="" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
   </a> -->

   <div class="container-fluid">
      <?php $this->view('layouts/alert') ?>
      <!-- #################### pembelian ################################################ -->
      <div class="pt-2 col-md">
         <!-- ########## form pembelian ########## -->
         <div class="card-header border-transparent bg-info">
            <?= form_open('', ['method' => 'POST']) ?>
            <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
            <div class="mb-n3 row">
               <div class="col-md-1">
                  <div class="form-group">
                     <?= form_input('jml', $input->jml, ['class' => 'form-control', 'name' => 'jml', 'placeholder' => 'Jml']) ?>
                     <?= form_error('jml') ?>
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
               <!-- <div class="col-md-1">
                  <div class="form-group">
                     <?= form_input('isi_eceran', $input->isi_eceran, ['class' => 'form-control', 'name' => 'isi_eceran', 'value' => 1, 'placeholder' => '', 'readonly' => true]) ?>
                     <?= form_error('isi_eceran') ?>
                  </div>
               </div> -->
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('harga_eceran', $input->harga_eceran, ['class' => 'form-control', 'name' => 'harga_eceran', 'placeholder' => 'Harga Eceran']) ?>
                     <?= form_error('harga_eceran') ?>
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

         <!-- ########## tabel pembelian ########## -->
         <div class="card-body p-0">
            <table class="table table-hover">
               <thead>
                  <tr class="border">
                     <th width="50px">Jml</th>
                     <!-- <th>Barcode</th> -->
                     <th>Item</th>
                     <th>Isi G</th>
                     <th>Harga Grosir</th>
                     <!-- <th>Isi E</th> -->
                     <th>Harga Eceran</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($content as $ct) : ?>
                     <tr>
                        <td><?= $ct->jml ?></td>
                        <!-- <td><?= $ct->barcode ?></td> -->
                        <td><?= $ct->item ?></td>
                        <td><?= $ct->isi_grosir ?></td>
                        <td><?= $ct->harga_grosir ?></td>
                        <!-- <td><?= $ct->isi_eceran ?></td> -->
                        <td><?= $ct->harga_eceran ?></td>
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
   </div>
   <!-- akhir harga jual -->
</div>
</div>