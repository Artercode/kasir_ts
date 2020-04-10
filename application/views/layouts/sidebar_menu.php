<!-- Sidebar menu -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="" class="brand-link">
		<img src="<?= base_url() ?>images/pegawai/<?= $pegawai['foto']; ?>" class="ml-2 brand-image img-circle elevation-3" alt="">
		<span class="brand-text font-weight-light"><?= $pegawai['nama']; ?></span>
	</a>

	<!-- isi sidebar menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-header mt-n2 mb-n1 text-center">MENU</li>


			<!-- #################### penjualan ################################################ -->
			<li class="nav-item has-treeview">
				<a href="" class="nav-link active">
					<i class="nav-icon fas fa-edit"></i>
					<p>
						PENJUALAN
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= base_url(); ?>kasir" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Kasir</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url(); ?>stok/stok_kategori" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Pelanggan</p>
						</a>
					</li>
				</ul>
			</li>

			<!-- #################### pembelian ################################################ -->
			<li class="nav-item has-treeview">
				<a href="" class="nav-link active">
					<i class="nav-icon fas fa-edit"></i>
					<p>
						PEMBELIAN
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= base_url(); ?>pembelian/nota_pembelian" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Nota Pembelian</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url(); ?>stok/stok_kategori" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Pemasok</p>
						</a>
					</li>
				</ul>
			</li>

			<!-- #################### stok ##################################################### -->
			<li class="nav-item has-treeview">
				<a href="" class="nav-link active">
					<i class="nav-icon fas fa-edit"></i>
					<p>
						STOK
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= base_url(); ?>stok/stok_item" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Stok Item</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url(); ?>stok/kategori" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Kategori</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url(); ?>kemasan" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Kemasan</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url(); ?>stok/stok_data" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Harga Jual</p>
						</a>
					</li>
				</ul>
			</li>

			<!-- #################### pegawai ################################################## -->
			<li class="nav-item has-treeview menu-close">
				<a href="" class="nav-link active">
					<i class="nav-icon fas fa-user"></i>
					<p>
						PEGAWAI
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= base_url(); ?>menu/data_pegawai" class="nav-link active">
							<i class="nav-icon far fa-id-badge "></i>
							<p>Data Pegawai</p>
						</a>
					</li>
				</ul>
			</li>

			<!-- #################### Pembukuan ################################################ -->
			<li class="nav-item has-treeview menu-close">
				<a href="" class="nav-link active">
					<i class="nav-icon fas fa-user"></i>
					<p>
						PEMBUKUAN
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= base_url(); ?>menu/data_pegawai" class="nav-link active">
							<i class="nav-icon far fa-id-badge "></i>
							<p>Daftar Harga</p>
						</a>
					</li>
				</ul>
			</li>

			<!-- #################### setting ################################################## -->
			<li class="nav-item has-treeview menu-close">
				<a href="" class="nav-link active">
					<i class="nav-icon fas fa-user"></i>
					<p>
						SETTING
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= base_url(); ?>menu/data_pegawai" class="nav-link active">
							<i class="nav-icon far fa-id-badge "></i>
							<p>Level & Akses Menu</p>
						</a>
					</li>
				</ul>
			</li>



			<li class="nav-item">
				<a href="pages/calendar.html" class="nav-link">
					<i class="nav-icon far fa-calendar-alt"></i>
					<p>
						Calendar
						<span class="badge badge-info right">2</span>
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="pages/widgets.html" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>
						Widgets
						<span class="right badge badge-danger">New</span>
					</p>
				</a>
			</li>
		</ul>
	</nav>
	<!-- akhir isi sidebar menu -->
</aside>
<!-- akhir sidebar menu -->