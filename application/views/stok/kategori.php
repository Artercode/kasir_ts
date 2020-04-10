<!-- sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="mx-1 far fa-fw fa-id-badge"></i>Kategori</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="mx-1 fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h6">
                     Kategori
                  </div>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <!-- ########## stok kategori ########## -->
   <div class="mt-n2 col-lg-11 container-fluid">
      <?php $this->view('layouts/alert') ?>
      <!-- tambah kategori -->
      <div class="card bg-info">
         <div class="card-header">
            <h3 class="card-title">Tambah Kategori</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
               </button>
            </div>
         </div>

         <div class="mb-n3 card-body">
            <?= form_open($form_action, ['method' => 'POST']) ?>
            <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
            <div class="row">
               <div class="col-md-5">
                  <div class=" form-group">
                     <!-- id untuk createSlug() -->
                     <!-- <label for="">Kategori</label> -->
                     <?= form_input('kategori', $input->kategori, ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', 'required' => true, 'placeholder' => 'Kategori', 'autofocus' => true]) ?>
                     <?= form_error('kategori') ?>
                  </div>
               </div>

               <div class="col-md-5">
                  <div class="form-group">
                     <!-- <label for="">Slug</label> -->
                     <?= form_input('slug', $input->slug, ['class' => 'form-control', 'id' => 'slug', 'required' => true, 'readonly' => true, 'placeholder' => 'Slug']) ?>
                     <?= form_error('slug') ?>
                  </div>
               </div>

               <div class="col-md-2 text-right">
                  <button type="submit" class="btn btn-warning">Tambah</button>
                  <?= form_close() ?>
               </div>
            </div>
         </div>
      </div>

      <!-- tabel kategori -->
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="card mt-3">
               <div class="card-header">
                  <span>Kategori - <?= $this->stok->count(); ?></span>
                  <div class="float-right">
                     <!-- search -->
                     <?= form_open(base_url('stok/search'), ['method' => 'POST']) ?>
                     <div class="input-group">
                        <input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-secondary btn-sm">
                              <i class="fas fa-search"></i>
                           </button>
                           <a href="<?= base_url('category/reset') ?>" class="btn btn-secondary btn-sm">
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
                           <th scope="col">Slug</th>
                           <th width="100px" scope="col"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <!-- $no untuk membuat no urut dalam tabel -->
                        <!-- untuk $perPage harus diisi secara manual -->
                        <?php $no = $this->stok->count();
                        foreach ($content as $row) : ?>
                           <tr>
                              <td><?= $no ?></td>
                              <td><?= $row->kategori ?></td>
                              <td><?= $row->slug ?></td>
                              <td>
                                 <?= form_open("stok/delete/$row->id", ['method' => 'POST']) ?>
                                 <?= form_hidden('id', $row->id) ?>
                                 <a href="<?= base_url("stok/edit/$row->id") ?>" class="btn btn-sm">
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
   <!-- ### akhir stok kategori ### -->
</div>