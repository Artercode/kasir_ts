<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="far fa-circle"></i></i> Macam Kemasan</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h5">
                     Jenis Kemasan : <br>
                     -- Untuk menentikan kemasan tiap harga grosir, harga eceran dan harga satuan. <br>
                     -- Id Kemasan merupakan singkatan yang akan dicetak di nota. Maksimun 3 huruf. <br>
                     -- Jenis kemasan dapat diubah, tambah, dan hapus sesuai kebutuhan.
                  </div>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <section class="pt-3 content">
      <div class="container-fluid">
         <?php $this->load->view('layouts/alert') ?>
         <!-- set kategori -->
         <div class="mt-n4 row">
            <!-- kemasan grosir -->
            <div class="col-md-4">
               <div class="card">
                  <div class="card-header border-transparent bg-info">
                     <?= form_open('', ['method' => 'POST']) ?>
                     <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                     <div class="mb-n3 row">
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('id_kemasan_grosir', $input->id_kemasan_grosir, ['class' => 'form-control', 'name' => 'id_kemasan_grosir', 'placeholder' => 'ID K Grosir']) ?>
                              <?= form_error('id_kemasan_grosir') ?>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('kemasan_grosir', $input->kemasan_grosir, ['class' => 'form-control', 'name' => 'kemasan_grosir', 'placeholder' => 'K Grosir']) ?>
                              <?= form_error('kemasan_grosir') ?>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <a type="submit" class="h2 float-right">
                                 <i class="far fa-plus-square"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <?= form_close() ?>
                  </div>
                  <div class="card-body p-0">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>ID K Grosir</th>
                              <th>K Grosir</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($grosir as $grs) : ?>
                              <tr>
                                 <td><?= $grs->id_kemasan_grosir ?></td>
                                 <td><?= $grs->kemasan_grosir ?></td>
                                 <td class="text-right">
                                    <a type="submit" class="h5 mb-n2">
                                       <i class="text-info far fa-edit"></i>
                                    </a>
                                    <a type="submit" class="h5 mb-n2 ml-3">
                                       <i class="text-red far fa-trash-alt"></i>
                                    </a>
                                 </td>
                              </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!-- kemasan eceran -->
            <div class="col-md-4">
               <div class="card">
                  <div class="card-header border-transparent bg-info">
                     <?= form_open('', ['method' => 'POST']) ?>
                     <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                     <div class="mb-n3 row">
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('id_kemasan_eceran', $input->id_kemasan_eceran, ['class' => 'form-control', 'name' => 'id_kemasan_eceran', 'placeholder' => 'ID K Eceran']) ?>
                              <?= form_error('id_kemasan_eceran') ?>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('kemasan_eceran', $input->kemasan_eceran, ['class' => 'form-control', 'name' => 'kemasan_eceran', 'placeholder' => 'K Eceran']) ?>
                              <?= form_error('kemasan_eceran') ?>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <a type="submit" class="h2 float-right">
                                 <i class="far fa-plus-square"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <?= form_close() ?>
                  </div>
                  <div class="card-body p-0">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>ID K Eceran</th>
                              <th>K Eceran</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($eceran as $ece) : ?>
                              <tr>
                                 <td><?= $ece->id_kemasan_eceran ?></td>
                                 <td><?= $ece->kemasan_eceran ?></td>
                                 <td class="text-right">
                                    <a type="submit" class="h5 mb-n2">
                                       <i class="text-info far fa-edit"></i>
                                    </a>
                                    <a type="submit" class="h5 mb-n2 ml-3">
                                       <i class="text-red far fa-trash-alt"></i>
                                    </a>
                                 </td>
                              </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!-- kemasan satuan -->
            <div class="col-md-4">
               <div class="card">
                  <div class="card-header border-transparent bg-info">
                     <?= form_open('', ['method' => 'POST']) ?>
                     <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                     <div class="mb-n3 row">
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('id_kemasan_satuan', $input->id_kemasan_satuan, ['class' => 'form-control', 'name' => 'id_kemasan_satuan', 'placeholder' => 'ID K Satuan']) ?>
                              <?= form_error('id_kemasan_satuan') ?>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('kemasan_satuan', $input->kemasan_satuan, ['class' => 'form-control', 'name' => 'kemasan_satuan', 'placeholder' => 'K Satuan']) ?>
                              <?= form_error('kemasan_satuan') ?>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <a type="submit" class="h2 float-right">
                                 <i class="far fa-plus-square"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <?= form_close() ?>
                  </div>
                  <div class="card-body p-0">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>ID K Satuan</th>
                              <th>K Satuan</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($satuan as $sat) : ?>
                              <tr>
                                 <td><?= $sat->id_kemasan_satuan ?></td>
                                 <td><?= $sat->kemasan_satuan ?></td>
                                 <td class="text-right">
                                    <a type="submit" class="h5 mb-n2">
                                       <i class="text-info far fa-edit"></i>
                                    </a>
                                    <a type="submit" class="h5 mb-n2 ml-3">
                                       <i class="text-red far fa-trash-alt"></i>
                                    </a>
                                 </td>
                              </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- akhir set kategori -->
      </div>
   </section>
</div>