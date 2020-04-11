<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_menu'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="mx-1 far fa-fw fa-id-badge"></i>Data Pegawai</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="mx-1 fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h6">
                     info
                  </div>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <!-- ########## data pegawai ########## -->
   <div class="mt-n2 col-lg-11 container-fluid">
      <?php $this->view('layouts/alert') ?>
      <div class="row">
         <!-- ########## foto dan edit password ########## -->
         <div class="col col-md-3">
            <div class="card">
               <?= form_open_multipart('pegawai/editFoto'); ?>
               <div class="card-body">
                  <img src="<?= base_url('images/pegawai/') . $pegawai['foto']; ?>" class="card-img-top border" height="">
               </div>

               <div class="card-footer">
                  <div class="mb-2 input-group-append">
                     <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input">
                        <!-- untuk menampilkan nama file yang kita pilih - jquery di footer -->
                        <label class="custom-file-label" for="foto" placeholder="">Pilih Foto</label>
                     </div>
                  </div>
                  <div class="input-group-append">
                     <button type="submit" class="btn btn-primary btn-block">Edit</button>
                  </div>
               </div>
               <?php form_close() ?>
            </div>

            <button type="submit" class="col-lg btn btn-danger" onclick="return confirm('Hati-hati! AKUN anda akan terhapus dari database dan tidak dapat digunakan lagi. Click OK untuk hapus.')">Hapus Akun</button>
         </div>

         <!-- ########## data akun ########## -->
         <div class="col-md-9">
            <div class="card">
               <div class="card-header border-transparent">
                  <h3 class="pt-1 card-title">Data akun - [lama bergabung] - <?= date('d F Y', $pegawai['tgl_masuk']); ?></h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                     </button>
                  </div>
               </div>

               <div class="card-body p-0">
                  <div class="table-responsive">
                     <table class="table m-0">
                        <tbody>
                           <form action="<?= base_url('pegawai/editDataPegawai'); ?>" method="post">
                              <!-- nama -->
                              <tr>
                                 <td>
                                    <div class="icheck-primary d-inline">
                                       <input type="checkbox" id="checkboxPrimary1" checked>
                                       <label for="checkboxPrimary1"></label>
                                    </div>
                                 </td>
                                 <td>
                                    <h5>Nama</h5>
                                 </td>
                                 <td>
                                    <div class="input-group">
                                       <input type="text" name="nama" value="<?= $pegawai['nama']; ?>" class="form-control">
                                       <div class="input-group-append">
                                          <button type="submit" class="btn btn-primary">Edit</button>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <?= form_error('nama') ?>
                              <!-- alamat -->
                              <tr>
                                 <td>
                                    <div class="icheck-primary d-inline">
                                       <input type="checkbox" id="checkboxPrimary2" checked>
                                       <label for="checkboxPrimary2"></label>
                                    </div>
                                 </td>
                                 <td>
                                    <h5>Alamat</h5>
                                 </td>
                                 <td>
                                    <form action="" method="POST">
                                       <div class="input-group">
                                          <input type="text" name="alamat" value="<?= $pegawai['alamat']; ?>" class="form-control">
                                          <div class="input-group-append">
                                             <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                          </div>
                                       </div>
                                    </form>
                                 </td>
                              </tr>
                              <?= form_error('alamat') ?>
                              <!-- kota -->
                              <tr>
                                 <td>
                                    <div class="icheck-primary d-inline">
                                       <input type="checkbox" id="checkboxPrimary3">
                                       <label for="checkboxPrimary3"></label>
                                    </div>
                                 </td>
                                 <td>
                                    <h5>Kota</h5>
                                 </td>
                                 <td>
                                    <form action="" method="POST">
                                       <div class="input-group">
                                          <input type="text" name="kota" value="<?= $pegawai['kota']; ?>" class="form-control" placeholder="">
                                          <div class="input-group-append">
                                             <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                          </div>
                                       </div>
                                    </form>
                                 </td>
                              </tr>
                              <?= form_error('kota') ?>
                              <!-- phone -->
                              <tr>
                                 <td>
                                    <div class="icheck-primary d-inline">
                                       <input type="checkbox" id="checkboxPrimary4" checked>
                                       <label for="checkboxPrimary1"></label>
                                    </div>
                                 </td>
                                 <td>
                                    <h5>Phone</h5>
                                 </td>
                                 <td>
                                    <form action="" method="POST">
                                       <div class="input-group">
                                          <input type="numeric" name="phone" value="<?= $pegawai['phone']; ?>" class="form-control" placeholder="">
                                          <div class="input-group-append">
                                             <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                          </div>
                                       </div>
                                    </form>
                                 </td>
                              </tr>
                              <?= form_error('phone') ?>
                           </form>


                           <!-- password lama-->
                           <tr>
                              <td></td>
                              <td>
                                 <h5>Password Lama</h5>
                              </td>
                              <td>
                                 <div class="input-group">
                                    <input type="password" name="passwordLama" class="form-control" placeholder="Password Lama">
                                 </div>
                              </td>
                           </tr>
                           <!-- password baru-->
                           <tr>
                              <td></td>
                              <td>
                                 <h5>Password Baru</h5>
                              </td>
                              <td>
                                 <div class="input-group">
                                    <input type="password" name="passwordBaru" class="form-control" placeholder="Password Baru">
                                 </div>
                              </td>
                           </tr>
                           <!-- konfirmasi password-->
                           <tr>
                              <td></td>
                              <td>
                                 <h5>konfirmasi Password</h5>
                              </td>
                              <td>
                                 <div class="input-group">
                                    <input type="password" name="konPassword" class="form-control" placeholder="Konfirmasi Password">
                                    <div class="input-group-append">
                                       <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <br><br>
         </div>
      </div>
   </div>
   <!-- ### akhir data pegawai ### -->
</div>