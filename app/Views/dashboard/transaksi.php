<?= $this->extend('dashboard/template/index'); ?>
<?= $this->section('dashboardcontent'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tabel Transaksi</h1>
					
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
			<div class="card p-1 data-barang">
				<table id="table1" class="cell-border table-bordered">
					<thead>
						<tr>
							<th>Nama Pemesan</th>
							<th>No Telp</th>
							<th>Total Harga</th>
							<th>Status</th>
							<th>Tanggal Pemesanan</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($transaksi as $b) : ?>
							<tr>
								<td><?= $b['nama']?></td>
								<td><?= $b['no_tlp']?></td>
								<td><?= $b['total_harga']?></td>
								<td>
								<?php if($b['status']==0){
									echo "Belum Dibayar";
								}elseif ($b['status']==1) {
									echo "Sudah Dibayar/Pengemasan";
								}elseif ($b['status']==2) {
									echo "Dalam Perjalanan";
								}elseif ($b['status']==3) {
									echo "Selesai";
								}
								?>
									
								</td>
								<td><?= $b['created_at']?></td>
								<td>
									<button type="button" class="btn btn-primary mr-2" id="edit-data" data="<?= $b['id_transaksi']?>">Update</button>
									<a href="/Barang/hapus/<?= $b['id_transaksi']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
								</td>
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
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Edit Barang</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Transaksi/update'); ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" id="edit_id" name="edit_id">
						<label for="edit_name" class="form-label">Nama Pemesan</label>
						<input type="text" class="form-control mb-3" id="edit_name" name="name">

						<label for="edit_stok" class="form-label">No Telephone</label>
						<input type="text" class="form-control mb-3" id="edit_stok" name="no_tlp">

						<label for="edit_harga" class="form-label">Total Harga</label>
						<input type="text" class="form-control mb-3" id="edit_harga" name="total_harga">

						<div class="input-group">
							<label class="input-group-text" for="inputGroupSelect01">Options</label>
							<select class="form-select" id="inputGroupSelect01" name="status">
								<option selected>Choose...</option>
								<option value="1">Sudah Dibayar</option>
								<option value="2">Dalam Perjalanan</option>
								<option value="3">Selesai</option>
							</select>
						</div>
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Edit Data</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('dashboardscript'); ?>
<script type="text/javascript">
	$(document).ready( function () {
		$('#table1').DataTable();

		$('#edit-data').on('click',function(){
            // get data from button edit
            var id = $(this).attr('data')
            $.ajax({
            	url : "<?= base_url('Transaksi/get_data') ?>",
            	type : 'GET',
            	data : {
            		'id_transaksi': id,
            	},
            	dataType : 'json',
            	success : function(data){
            		console.log(data);
            		$('#editModal').modal('show');
            		$('[name="edit_id"]').val(data.id_transaksi);
            		$('[name="name"]').val(data.nama);
            		$('[name="no_tlp"]').val(data.no_tlp);
            		$('[name="total_harga"]').val(data.total_harga);
            	},
            	error: function(data){
            		console.log(data);
            	}
            });
        });
	});

</script>
<?= $this->endSection(); ?>
