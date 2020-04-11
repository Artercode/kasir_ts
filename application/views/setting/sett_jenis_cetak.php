<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="far fa-circle"></i></i> Jenis Cetak</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h5">
                     Jenis nota : <br>
                     -- ID Cetak untuk menentukan awalan nomer semua hasil cetak. <br>
                     -- Jenis Cetak adalah semua laporan yang dapat di cetak, sebagai bukti keluar masuk data di komputer. <br>
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
         <!-- jenis nota -->
         <div class="mt-n4 row">
            <!-- jenis nota -->
            <div class="col-md-4">
               <div class="card">
                  <div class="card-header border-transparent bg-info">
                     <?= form_open('', ['method' => 'POST']) ?>
                     <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                     <div class="mb-n3 row">
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('id_nota', $input->id_nota, ['class' => 'form-control', 'name' => 'id_nota', 'placeholder' => 'ID Nota']) ?>
                              <?= form_error('id_nota') ?>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <?= form_input('nota', $input->nota, ['class' => 'form-control', 'name' => 'nota', 'placeholder' => 'Nota']) ?>
                              <?= form_error('nota') ?>
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
                              <th>ID Cetak</th>
                              <th>Cetak</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($cetak as $ct) : ?>
                              <tr>
                                 <td><?= $ct->id_cetak ?></td>
                                 <td><?= $ct->cetak ?></td>
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
         <!-- akhir jenis nota -->
      </div>
   </section>
</div>