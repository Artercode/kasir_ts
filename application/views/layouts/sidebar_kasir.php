<!-- Sidebar kasir -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="" class="brand-link">
		<img src="<?= base_url() ?>images/pegawai/<?= $this->session->userdata('foto') ?>" class="ml-2 brand-image img-circle elevation-3" alt="">
		<span class="brand-text font-weight-light"><?= $this->session->userdata('nama') ?></span>
	</a>

	<!-- Sidebar menu -->
	<div class="sidebar">
		<!-- no nota -->
		<div class="container-fluid">
			<div class="pt-2 card text-center shadow">
				<h4>K110320-203245</h4>
				<!-- <img src="images/kucing.jpg" alt="" class="p-2"> -->
			</div>
		</div>

		<!-- total item & total barang -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<div class="pt-2 mt-n1 card text-center shadow">
						<h6>Jenis-Item</h6>
						<h3 class="mt-n2">15</h3>
					</div>
				</div>

				<div class="col-6">
					<div class="pt-2 mt-n1 card text-center shadow">
						<h6>Total-Item</h6>
						<h3 class="mt-n2">150</h3>
					</div>
				</div>
			</div>
		</div>

		<!-- total discount -->
		<div class="container-fluid">
			<div class="p-2 mt-n1 card shadow">
				<h6>Total Discount</h6>
				<h1 class="my-n1 text-right">3.000</h1>
			</div>
		</div>

		<!-- total harga -->
		<div class="container-fluid">
			<div class="p-2 mt-n1 card shadow">
				<h6>Total Belanja</h6>
				<h1 class="my-n1 text-right">300.000</h1>
			</div>
		</div>

	</div>
	<!-- akhir sidebar menu -->
</aside>
<!-- akhir sidebar kasir -->