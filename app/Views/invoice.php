<?= $this->extend('template/shipping'); ?>
<?= $this->section('content'); ?>
<main>
	<div class="container">
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">

						<!-- Main content -->
						<div class="invoice p-3 mb-3">
							<!-- title row -->
							<div class="row">
								<div class="col-12">
									<div align="center">
										<h1 href="#" style="color:black; font-size: 50;">
											<img src="<?= base_url('assets/img/logo.png') ?>" alt="" width="50" height="50" class="align-text-top">
											TOKO PAK ROHMAT
										</h1>
									</div>
									<h4>
										<i class="fas fa-globe"></i> Nota Pesanan
										<small class="float-right">Date: 2/10/2014</small>
									</h4>
								</div>
								<!-- /.col -->
							</div>

							<!-- info row -->
							<div class="row invoice-info p-3" style="background-color:  #F5F5F5;">
								<div class="col-lg-9 invoice-col">
									<address>
										<strong>Nama Pembeli:</strong> <?= $nama?><br>
										<strong>Alamat Pembeli:</strong><br>
										<?= $alamat?><br>
										<strong>No. Handphone Pembeli:</strong> <?= $no_tlp?>
									</address>
								</div>
								<!-- /.col -->
								<div class="col-sm-2">
									<address>
										<strong>Nama Penjual:</strong> Pak Rohmat
									</address>
								</div>
							</div>
							<!-- /.row -->

							<!-- info row -->
							<div class="row invoice-info mt-3">
								<div class="col-sm-3">
									<address>
										<strong>No. Pesanan:</strong><br>2104276JQW5JAV
									</address>
								</div>
								<div class="col-sm-3">
									<address>
										<strong>Waktu Pemesanan:</strong><br><?= $created_at?>
									</address>
								</div>
								<div class="col-sm-3">
									<address>
										<strong>Metode Pembayaran:</strong><br><?= $metode_pembayaran?>
									</address>
								</div>
								<div class="col-sm-3">
									<address>
										<strong>Jasa Kirim:</strong><br><?= $jasa_kirim?>
									</address>
								</div>
							</div>
							<!-- /.row -->

							<!-- Table row -->
							<div class="row">
								<h5><b>Rincian Pesanan</b></h5>
								<div class="col-12 table-responsive">
									<table class="table table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Produk</th>
												<th>Warna</th>
												<th>Harga Produk</th>
												<th>Kuantitas</th>
												<th>Subtotal</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>SAMSUNG S12 ULTRA</td>
												<td>Hitam</td>
												<td>Rp. <?= $sub_total?></td>
												<td><?= $jumlah?></td>
												<td>Rp. <?= $sub_total?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->

							<div class="row">
								<!-- accepted payments column -->
								<div class="col-4">
								</div>

								<div class="col-4">
								</div>

								<!-- /.col -->
								<div class="col-4">
									<div class="text-end">
										<p class="text-end pl-5"><b>Subtotal &emsp;&emsp;&emsp;&emsp;Rp. <?= $sub_total?></b></p>
										<p class="text-end pl-5"><b>Total Kuantitas &emsp;&emsp;&emsp; <?= $jumlah?> produk</b></p>
									</div>
									<div class="table-responsive">
										<table class="table table-borderless" style="background-color:  #F5F5F5">
											<tr>
												<th style="width:60%">Subtotal untuk Produk:</th>
												<td>Rp. <?= $sub_total?></td>
											</tr>
											<tr>
												<th>Pengiriman</th>
												<td>Rp. <?= $ongkir?></td>
											</tr>
											<tr>
												<th>Total Pembayaran</th>
												<td>Rp. <?= $total_harga?></td>
											</tr>
										</table>
									</div>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->

							<!-- this row will not appear when printing -->
							<div class="row no-print">
								<div class="col-12">
									<a href="#" class="btn btn-default" id="print"><i class="fas fa-print"></i> Print</a>
								</div>
							</div>
						</div>
						<!-- /.invoice -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
</main>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
	$('document').ready(function() {
		$("#print").on('click', function() {
			window.print();
		});
	});
</script>
<?= $this->endSection(); ?>