<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/fontawesome/css/all.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/adminlte.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/DataTables/datatables.min.css') ?>" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?= base_url('assets/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Toko Saya</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="<?= base_url('/dashboard') ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('/barang') ?>" class="nav-link active">
								<i class="nav-icon fas fa-folder"></i>
								<p>
									Barang
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/kanban.html" class="nav-link">
								<i class="nav-icon fas fa-clipboard-list"></i>
								<p>
									Transaksi
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/kanban.html" class="nav-link">
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p>
									Logout
								</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Tabel Barang</h1>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barangModal">
								Tambah Barang
							</button>
						</div><!-- /.col -->
						<div class="col-sm-6">
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- Small boxes (Stat box) -->
					<div class="card p-2">
						<table id="table1" class="cell-border">
							<thead>
								<tr>
									<th>Nama Barang</th>
									<th>Stok</th>
									<th>Harga</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($barang as $b) : ?>
									<tr>
										<td><?= $b['nama_barang']?></td>
										<td><?= $b['stok']?></td>
										<td><?= $b['harga']?></td>
										<td>Hapus</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /.row -->
					<!-- Main row -->
				</section>
				<!-- /.Left col -->
				<!-- right col (We are only adding the ID to make the widgets sortable)-->
				<!-- right col -->
			</div>
			<!-- /.row (main row) -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Modal Buat -->
<div class="modal fade" id="barangModal" tabindex="-1" aria-labelledby="barangModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Barang/tambah'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control mb-3" id="name" placeholder="Nama Barang" name="name">
						<input type="text" class="form-control mb-3" id="jumlah" placeholder="Jumlah" name="jumlah">
						<input type="text" class="form-control mb-3" id="harga" placeholder="Harga" name="harga">
						<input type="text" class="form-control mb-3" id="keterangan" placeholder="Keterangan" name="keterangan">
						<div class="input-group mb-3">
							<input type="file" class="form-control" id="inputGroupFile02">
							<label class="input-group-text" for="inputGroupFile02">Upload</label>
						</div>

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Tambah Data</button>
				</div>
			</form>
		</div>
	</div>
</div>
<footer class="main-footer">
	<strong>Copyright &copy; 2021 .</strong>
	All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
<script src="<?= base_url('assets/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte.min.js') ?>"></script>
<script src="<?= base_url('assets/DataTables/datatables.min.js') ?>"></script>

<script type="text/javascript">
	$(document).ready( function () {
		$('#table1').DataTable();
	} );
</script>
</body>
</html>