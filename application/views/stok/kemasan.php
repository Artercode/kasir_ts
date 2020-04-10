<!-- sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="mx-1 far fa-fw fa-id-badge"></i>Kemasna</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="mx-1 fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h6">
                     Kemasan
                  </div>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <!-- ########## kemasan ########## -->
   <div class="mt-n2 col-lg-11 container-fluid">
      <?php $this->view('layouts/alert') ?>
      <!-- tambah kemasan -->
      <div class="card bg-info">
         <div class="card-header">
            <h3 class="card-title">Tambah kemasan</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
               </button>
            </div>
         </div>

         <div class="mb-n3 card-body">
            <?= form_open($form_action, ['method' => 'POST']) ?>
            <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
            <div class="row">
               <div class="col-md-2">
                  <div class=" form-group">
                     <?= form_input('kategori', $input->kategori, ['class' => 'form-control', 'name' => 'kategori', 'placeholder' => 'Kategori', 'autofocus' => true]) ?>
                     <?= form_error('kategori') ?>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class=" form-group">
                     <?= form_input('Item', $input->item, ['class' => 'form-control', 'name' => 'item', 'placeholder' => 'item', 'autofocus' => true]) ?>
                     <?= form_error('Item') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('kemasan_grosir', $input->kemasan_grosir, ['class' => 'form-control', 'name' => 'kemasan_grosir', 'placeholder' => 'Kemasan Grosir']) ?>
                     <?= form_error('kemasan_grosir') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('kemasan_eceran', $input->kemasan_eceran, ['class' => 'form-control', 'name' => 'kemasan_eceran', 'placeholder' => 'Kemasan Eceran']) ?>
                     <?= form_error('kemasan_eceran') ?>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <?= form_input('kemasan_satuan', $input->kemasan_satuan, ['class' => 'form-control', 'name' => 'kemasan_satuan', 'placeholder' => 'Kemasan Satuan']) ?>
                     <?= form_error('kemasan_satuan') ?>
                  </div>
               </div>

               <div class="col-md-1 text-right">
                  <a type="submit" class="h2">
                     <i class="far fa-plus-square"></i>
                  </a>
                  <?= form_close() ?>
               </div>
            </div>
         </div>
      </div>

      <!-- tabel kemasan -->
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="card mt-3">
               <div class="card-header">
                  <span>Kategori - <?= $this->kemasan->count(); ?></span>
                  <div class="float-right">
                     <!-- search -->
                     <?= form_open(base_url('kemasan/search'), ['method' => 'POST']) ?>
                     <div class="input-group">
                        <input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-secondary btn-sm">
                              <i class="fas fa-search"></i>
                           </button>
                           <a href="<?= base_url('kemasan/reset') ?>" class="btn btn-secondary btn-sm">
                              <i class="fas fa-eraser"></i>
                           </a>
                        </div>
                     </div>
                     <?= form_close() ?>
                  </div>
               </div>
               <div class="card-body">
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Kategori</th>
                           <th scope="col">Kemasan Grosir</th>
                           <th scope="col">Kemasan Eceran</th>
                           <th scope="col">Kemasan Satuan</th>
                           <th width="100px" scope="col"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <!-- $no untuk membuat no urut dalam tabel -->
                        <!-- untuk $perPage harus diisi secara manual -->
                        <?php $no = $this->kemasan->count();
                        foreach ($content as $row) : ?>
                           <tr>
                              <td><?= $no ?></td>
                              <td><?= $row->kategori ?></td>
                              <td><?= $row->kemasan_grosir ?></td>
                              <td><?= $row->kemasan_eceran ?></td>
                              <td><?= $row->kemasan_satuan ?></td>
                              <td>
                                 <?= form_open("kemasan/delete/$row->id", ['method' => 'POST']) ?>
                                 <?= form_hidden('id', $row->id) ?>
                                 <a href="<?= base_url("kemasan/edit/$row->id") ?>" class="btn btn-sm">
                                    <i class="fas fa-edit text-info"></i>
                                 </a>
                                 <button type="submit" class="btn btn-sm" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                    <i class="fas fa-trash text-danger"></i>
                                 </button>
                                 <?= form_close() ?>
                              </td>
                           </tr>
                           <?php $no--; ?>
                        <?php endforeach ?>
                     </tbody>
                  </table>

                  <nav class="mt-3 mb-n3" aria-label="Page navigation example">
                     <!-- $pagination method di [40]stok.php dan [136]MY_Modal.php -->
                     <?= $pagination ?>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ### akhir kemasan ### -->
</div>