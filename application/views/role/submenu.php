<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="far fa-circle"></i></i> Submenu</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h5">
                     Submenu : <br>

                  </div>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <div class="container-fluid">
      <?php $this->view('layouts/alert') ?>
      <div class="row">
         <!-- #################### role ################################################### -->
         <div class="mt-n3 col-md-12">
            <!-- ########## form tambah role ########## -->
            <div class="card-header border-transparent bg-info">
               <?= form_open('role/tambah_role', ['method' => 'POST']) ?>
               <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
               <div class="mb-n3 row">
                  <div class="col-md-2">
                     <div class="form-group">
                        <?= form_input('menu_id', $input->menu_id, ['class' => 'form-control', 'name' => 'menu_id', 'placeholder' => 'ID Menu']) ?>
                        <?= form_error('menu_id') ?>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <?= form_input('submenu', $input->submenu, ['class' => 'form-control', 'name' => 'submenu', 'placeholder' => 'Submenu']) ?>
                        <?= form_error('submenu') ?>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <?= form_input('url', $input->url, ['class' => 'form-control', 'name' => 'url', 'placeholder' => 'Url']) ?>
                        <?= form_error('url') ?>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <?= form_input('icon', $input->icon, ['class' => 'form-control', 'name' => 'icon', 'placeholder' => 'Icon']) ?>
                        <?= form_error('icon') ?>
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

            <!-- ########## tabel role ########## -->
            <div class="card-body p-0">
               <table class="table table-hover">
                  <thead>
                     <tr class="border">
                        <th>ID Menu</th>
                        <th>Submenu</th>
                        <th>Url</th>
                        <th>Icon</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($content as $ct) : ?>
                        <tr>
                           <td><?= $ct->menu_id ?></td>
                           <td><?= $ct->submenu ?></td>
                           <td><?= $ct->url ?></td>
                           <td><?= $ct->icon ?></td>
                           <td class="text-right">
                              <a href="" type="submit" class="h5 mb-n2 ml-3">
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
         <!-- akhir role -->

      </div>
   </div>
</div>