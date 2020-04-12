<!-- sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="mx-1 far fa-fw fa-id-badge"></i>Kategori - <?= $this->stok_kategori->count(); ?> macam</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="mx-1 fas fa-exclamation-circle"></i>
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

   <div class="col-lg-10 container-fluid">
      <?php $this->view('layouts/alert') ?>
      <!-- #################### stok kategori ############################################# -->
      <div class="mt-n3 col-md">
         <!-- ########## form tambah kategori ########## -->
         <div class="card-header border-transparent bg-info">
            <?= form_open($form_action, ['method' => 'POST']) ?>
            <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
            <div class="mb-n3 row">
               <!-- kategori -->
               <div class="col-md-5">
                  <div class="form-group">
                     <!-- id untuk createSlug() -->
                     <!-- <label for="">Kategori</label> -->
                     <?= form_input('kategori', $input->kategori, ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', 'required' => true, 'placeholder' => 'Kategori', 'autofocus' => true]) ?>
                     <?= form_error('kategori') ?>
                  </div>
               </div>
               <!-- slug -->
               <div class="col-md-5">
                  <div class="form-group">
                     <!-- <label for="">Slug</label> -->
                     <?= form_input('slug', $input->slug, ['class' => 'form-control', 'id' => 'slug', 'required' => true, 'readonly' => true, 'placeholder' => 'Slug']) ?>
                     <?= form_error('slug') ?>
                  </div>
               </div>
               <!-- tambah -->
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

         <!-- ########## tabel kategori ########## -->
         <div class="card-body p-0">
            <table class="table table-hover">
               <thead>
                  <tr class="border">
                     <th scope="col">#</th>
                     <th scope="col">Kategori</th>
                     <th scope="col">Slug</th>
                     <th width="110px" scope="col"></th>
                  </tr>
               </thead>
               <tbody>
                  <!-- $no untuk membuat no urut dalam tabel -->
                  <!-- untuk $perPage harus diisi secara manual -->
                  <?php $no = $this->stok_kategori->count();
                  foreach ($content as $ct) : ?>
                     <tr>
                        <td><?= $no ?></td>
                        <td><?= $ct->kategori ?></td>
                        <td><?= $ct->slug ?></td>
                        <td class="text-right">
                           <?= form_open("stok/delete/$ct->id", ['method' => 'POST']) ?>
                           <?= form_hidden('id', $ct->id) ?>
                           <a href="<?= base_url("stok/edit/$ct->id") ?>" type="submit" class="h5 mb-n2">
                              <i class="text-info far fa-edit"></i>
                           </a>
                           <a type="submit" class="h5 mb-n2 ml-3" onclick="return confirm('Apakah yakin ingin menghapus?')">
                              <i class="text-red far fa-trash-alt"></i>
                           </a>
                           <?= form_close() ?>
                        </td>
                     </tr>
                     <?php $no--; ?>
                  <?php endforeach ?>
               </tbody>
            </table>

            <nav class="mt-3 mb-n3" aria-label="Page navigation example">
               <!-- $pagination method di controller, routes, dan [136]MY_Modal.php -->
               <?= $pagination ?>
            </nav>
         </div>
      </div>
      <!-- ### akhir stok kategori ### -->
   </div>
</div>