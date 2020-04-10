<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_kasir'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## nota ########## -->
   <section class="pt-3 content">
      <div class="container-fluid">
         <!-- tambah item -->
         <div class="card bg-info">
            <div class="card-header">
               <h3 class="card-title">Pembelian</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
               </div>
            </div>

            <div class="mb-n3 card-body">
               <?= form_open($form_action, ['method' => 'POST']) ?>
               <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
               <div class="row">
                  <div class="col-md-1">
                     <div class=" form-group">
                        <?= form_input('jml', $input->jml, ['class' => 'form-control', 'placeholder' => 'Jml', 'autofocus' => true]) ?>
                        <?= form_error('qty') ?>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="form-group">
                        <?= form_input('item', $input->item, ['class' => 'form-control', 'placeholder' => 'Item']) ?>
                        <?= form_error('item') ?>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <?= form_input('beli_grosir', $input->beli_grosir, ['class' => 'form-control', 'placeholder' => 'Harga Grosir']) ?>
                        <?= form_error('beli_grosir') ?>
                     </div>
                  </div>
                  <?php if (($input->beli_grosir) > 1) : ?>
                     <div class="col-md-2">
                        <div class=" form-group">
                           <?= form_input('isi', $input->isi, ['class' => 'form-control', 'placeholder' => 'isi']) ?>
                           <?= form_error('isi') ?>
                        </div>
                     </div>
                  <?php else : ?>
                     <div class="col-md-2">
                        <div class="form-group">
                           <?= form_input('beli_eceran', $input->beli_eceran, ['class' => 'form-control', 'placeholder' => 'Harga Eceran']) ?>
                           <?= form_error('beli_eceran') ?>
                        </div>
                     </div>
                  <?php endif ?>
                  <div class="col-md-4 text-right">
                     <button type="submit" class="btn btn-warning">Tambah</button>
                     <?= form_close() ?>
                  </div>
               </div>
            </div>
         </div>
         <!-- akhir tambah item -->

         <!-- isi nota -->
         <div class="row">
            <div class="pt-2 col-md-9">
               <?php $this->load->view('layouts/alert') ?>
               <div class="card">
                  <div class="card-body p-0">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th style="width: 30px">Jml</th>
                              <th>Item</th>
                              <th>Isi</th>
                              <th>Grosir</th>
                              <th>Eceran</th>
                              <th style="width: 130px">Sub Total</th>
                              <th style="width: 40px"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>10.000</td>
                              <td>Aqua 300ml</td>
                              <td>24</td>
                              <td>72.000</td>
                              <td>3500</td>
                              <td>3500</td>
                              <td class="text-right">
                                 <a type="submit" class="h5 mb-n2">
                                    <i class="text-red far fa-trash-alt"></i>
                                 </a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
            </div>

            <!-- sidebar kanan -->
            <div class="pt-2 col-md-3">
               <div class="card">
                  <img src="<?= base_url(); ?>images/search-icon.jpg" hieght="250" width="250px" alt="" class="rounded">
               </div>
            </div>
         </div>
         <!-- akhir isi nota -->
      </div>
   </section>
   <!-- ### akhir nota ### -->
</div>