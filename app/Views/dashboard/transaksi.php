<?= $this->extend('dashboard/template/index'); ?>
<?= $this->section('dashboardcontent'); ?>
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
			<div class="card p-1 data-barang">
				<table id="table1" class="cell-border table-bordered">
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
								<td>
									<button type="button" class="btn btn-primary mr-2 edit-data" id="edit-data" data="<?= $b['id']?>">Edit</button>
									<a href="/Barang/hapus/<?= $b['id']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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
<!-- Modal Buat -->
<div class="modal fade" id="barangModal" tabindex="-1" aria-labelledby="barangModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Barang/tambah'); ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control mb-3" id="name" placeholder="Nama Barang" name="name">
						<input type="text" class="form-control mb-3" id="jumlah" placeholder="Jumlah" name="jumlah">
						<input type="text" class="form-control mb-3" id="harga" placeholder="Harga" name="harga">
						<textarea class="form-control" placeholder="Keterangan" id="keterangan" name="keterangan"></textarea>
						<!-- <input type="text" class="form-control mb-3" id="gambar" placeholder="Gambar" name="gambar"> -->
						<label for="gambar" class="form-label">Masukan Foto</label>
						<input class="form-control" type="file" id="gambar" name="gambar">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah Data</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Edit Barang</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('Barang/edit'); ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" id="edit_id" name="id">
						<label for="edit_name" class="form-label">Masukan Nama</label>
						<input type="text" class="form-control mb-3" id="edit_name" name="name">
						<label for="edit_stok" class="form-label">Masukan Jumlah</label>
						<input type="text" class="form-control mb-3" id="edit_stok" name="stok">
						<label for="edit_harga" class="form-label">Masukan Harga</label>
						<input type="text" class="form-control mb-3" id="edit_harga" name="harga">
						<label for="edit_keterangan" class="form-label">Masukan Keterangan</label>
						<textarea class="form-control mb-3" placeholder="Keterangan" id="edit_keterangan" name="keterangan"></textarea>
						
						<!-- <input type="text" class="form-control mb-3" id="gambar" placeholder="Gambar" name="gambar"> -->
						<label for="foto" class="form-label">Masukan Foto</label>
						<img src="<?= base_url('assets/img/')?>" id="edit_foto" width="80px" name="foto">
						<input class="form-control" type="file" id="edit_foto" name="foto">
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
            var id = $(this).attr('data');
            $.ajax({
            	url : "<?= base_url('barang/get_data') ?>",
            	type : 'GET',
            	data : {
            		'id': id,
            	},
            	dataType : 'json',
            	success : function(data){
            		console.log(data);
            		$('#editModal').modal('show');
            		$('[name="id"]').val(data.id);
            		$('[name="name"]').val(data.nama_barang);
            		$('[name="stok"]').val(data.stok);
            		$('[name="harga"]').val(data.harga);
            		$('[name="keterangan"]').val(data.keterangan);
            		$('[name="foto"]').val(data.foto);
            	},
            	error: function(data){
            		console.log(data);
            	}
            });
            
            // Set data to Form Edit
            // $('#edit_id').val(id);
            // $('#edit_name').val(name);
            // $('#edit_stok').val(stok);
            // $('#edit_harga').val(harga);
            // $('#edit_keterangan').val(keterangan);
            // $('#edit_foto').attr("src", "<?= base_url('assets/img/')?>"+foto);
            // $('#editModal').modal('show');
            // Call Modal Edit
        });
	});

	// $.ajax({
	// 	url: "<?= base_url('Barang/get_data') ?>",
	// 	dataType: "json",
	// 	success: function(res) {
	// 		$(".data-barang").html(res)
	// 	}
	// })

</script>
<?= $this->endSection(); ?>
