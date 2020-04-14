<!-- Sidebar  -->
<?php $this->load->view('layouts/sidebar_kasir'); ?>
<!-- akhir sidebar -->

<div class="content-wrapper">
	<section class="content">
		<!-- ########## kasir ########## -->
		<div class="container-fluid">
			<div class="row">


				<!-- ########## nota ########## -->
				<div class="pt-2 col-md-9">
					<?php $this->load->view('layouts/alert') ?>
					<!-- ########## form tambah role ########## -->
					<div class="card-header border-transparent bg-info">
						<?= form_open('role/tambah_role', ['method' => 'POST']) ?>
						<?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
						<div class="mb-n3 row">
							<div class="col-md-2">
								<div class="form-group">
									<?= form_input('jml', $input->jml, ['class' => 'form-control', 'name' => 'jml', 'placeholder' => 'Jml']) ?>
									<?= form_error('jml') ?>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label class="mr-sm-2 sr-only" for="kemasan"></label>
									<select class="custom-select mr-sm-2" id="kemasan">
										<option selected>Eceran</option>
										<option value="1">Satuan</option>
										<!-- <option value="2">Satuan</option> -->
									</select>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<?= form_input('item', $input->item, ['class' => 'form-control', 'name' => 'item', 'placeholder' => 'Item']) ?>
									<?= form_error('item') ?>
								</div>
							</div>

							<!-- tambah -->
							<div class="col-md-4">
								<div class="form-group">
									<a type="submit" class="h2 float-right">
										<i class="far fa-plus-square"></i>
									</a>
								</div>
							</div>
						</div>
						<?= form_close() ?>
					</div>

					<!-- ########## tabel nota penjualan ########## -->
					<div class="card">
						<div class="card-body p-0">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Jml|Kms</th>
										<th>Item</th>
										<th>Harga</th>
										<th style="width: 130px">Sub Total</th>
										<th style="width: 40px"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>5|Ecr</td>
										<td>Aqua 300</td>
										<td>3.000</td>
										<td>15.000</td>
										<td>
											<a type="submit" class="h5 mb-n2 ml-3" onclick="return confirm('Apakah yakin ingin menghapus?')">
												<i class="text-red far fa-trash-alt"></i>
											</a>
										</td>
									</tr>


								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- ### akhir nota ### -->

				<!-- ########## sidebar kanan ########## -->
				<div class="pt-2 col-md-3">
					<div class="card">
						<img src="<?= base_url(); ?>images/search-icon.jpg" hieght="250" width="250px" alt="" class="rounded">
					</div>
				</div>
				<!-- ### akhir sidebar kanan ### -->
			</div>
		</div>
	</section>
	<!-- ### akhir kasir ### -->
</div>