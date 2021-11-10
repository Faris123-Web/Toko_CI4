<?= $this->extend('template/shipping'); ?>
<?= $this->section('content'); ?>

<?php 
  $keranjang = $cart->contents();
  $total = $cart->totalItems();
  $jumlah = $cart->total();
?>
<?php
	$email = [
		'name' => 'email',
		'id' => 'email',
		'placeholder' => 'Email',
		'class' => 'form-control',
		'style' => 'border-radius: 10px'
	];
	$jumlah1 =[
		'name' => 'jumlah',
		'id' => 'jumlah',
		'type' => 'hidden',
		'value' => $total,
	];

	$total_harga = [
		'name' => 'total_harga',
		'id' => 'total_harga',
		'type' => 'hidden',
		'value' => $jumlah,
	];
?>
<main>
	<div class="row">
		<div class="col-md-7">
			<div class="container">
				<div class="m-5">
					<div class="d-flex">
						<img src="<?= base_url('assets/img/') ?>/logo.png" alt="" width="70" height="70" class="d-inline-block align-text-top">
						<div class="">
							<p class="display-6 fw-bold m-0">
								Toko Pak Rohmat
							</p>
							<p>Cart > Information > Shipping > Payment</p>
						</div>
					</div>

					
						<div class="row g-3 mt-5">

							<div class="row">
								<div class="col">
									<h5>Informasi Kontak</h5>
								</div>
								<div class="col" style="text-align: right;">
									<p class="w-100" style="color: black;">Sudah mempunyai akun?
										<span><a href="index.html" style="color: #2a4365; text-align: right; text-decoration: none;"><b>Log in</b></a></span>
									</p>
								</div>
							</div>
					<?php echo form_open('Shipping/add');?>

							<?= form_input($jumlah1)?>
							<?= form_input($total_harga)?>

							<div class="col-12 mt-1">
								<?= form_input($email)?>
							</div>

							<div class="col-12 mt-4">
								<h5>Alamat pembelian</h5>
							</div>

							<div class="d-flex">
								<div class="col-sm-6 mt-1">
								<input type="text" class="form-control" style="border-radius: 10px;" id="firstName" name="nama_depan" placeholder="Nama Depan" value="" required>
								<div class="invalid-feedback">
									Valid first name is required.
								</div>
							</div>

							<div class="col-sm-6 mt-1">
								<input type="text" class="form-control" style="border-radius: 10px;" id="lastName" name="nama_belakang" placeholder="Nama Belakang" value="" required>
								<div class="invalid-feedback">
									Valid last name is required.
								</div>
							</div>
							</div>

							<div class="col-12 mt-3">
								<input type="text" class="form-control mb-3" style="border-radius: 10px;" id="alamat" name="alamat" placeholder="Alamat" required>
								<div class="invalid-feedback">
									Please enter a valid email address for shipping updates.
								</div>
							</div>

							<?php foreach ($keranjang as $key => $value) :?>
								<input type="hidden" name="id_barang" value="<?= $value['id']?>">
							<?php endforeach; ?>

							<div class="col-sm-12">
								<div class="form-group">
									<select class="form-control" style="border-radius: 10px;" id="provinsi" name="provinsi" placeholder="Provinsi">
										<option value="">Provinsi</option>
										<?php foreach($provinsi as $p):?>
											<option value="<?= $p->province_id ?>"><?= $p->province ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="d-flex">
								<div class="col-6">
								<div class="form-group">
									<select class="form-control" style="border-radius: 10px;" id="kota" name="kota" placeholder="Kota">
										<option value="">Kota/Kabupaten</option>
									</select>
								</div>
							</div>        

							<div class="col-sm-6">
								<input type="text" class="form-control" style="border-radius: 10px;" id="zip" name="zip" placeholder="Kode Pos" required>
							</div>
							</div>

						</div>

						<div class="form-check mt-3">
							<input type="checkbox" class="form-check-input" id="same-address">
							<label class="form-check-label" for="same-address">Simpan informasi ini untuk lain waktu</label>
						</div>

						<div align="left">
							<button type="submit" style="background: #17304E; font-size:20px; border-radius: 10px; height: 15%;width: 35%;" class="btn btn-secondary my-5"><b>Lanjutkan</b></button>
						</div>
				<?php echo form_close(); ?>
						<hr class="my-3">

						<div align="left">
							<p>All rights reserved Toko Pak Rohmat</p>
						</div>


					
				</div>
			</div>

		</div>
		<div class="col-md-5" style="background: lightgrey;">
			<div class="container" >
				<div class="m-5 pt-5">
					<div class="row" >
						<?php foreach ($keranjang as $key => $value) :?>
							<div class="col-sm-5" >
								<div class="">
									<img src="<?= base_url('assets/img/')?>/<?= $value['options']['foto']?>" height="145" width="150" style="border-radius:15px">
								</div>
							</div>
							<div class="col-sm-7 mt-4 mb-5">
								<h4 class="fw-bold mb-2" style="color: #17304E;">
									<?= $value['name']?>
								</h4>
								<h5 class="mb-2">Black</h5>
								<p class=""><?= number_to_currency($value['subtotal'], 'IDR') ;?></p>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="row" >
						<hr size="6" my-4>
						<table class="mb-4 mt-3">
							<tr>
								<td width="100px" height="50px">
									<p style="font-size: 23px;">Subtotal</p>
								</td>
								<td  width="400px" height="50px" align="right">
									<p style="font-size: 17px"><?= number_to_currency($jumlah, 'IDR') ;?></p>
								</td>
							</tr>
							<tr>
								<td height="50px">
									<p style="font-size: 23px">Shipping</p>
								</td>
								<td height="50px" align="right">
									<p style="font-size: 17px">Calculated at next step</p>
								</td>
							</tr>
						</table>
						<hr size="6" my-4>
					</div>

					<div class="row" >
						<table class="mb-4">
							<tr>
								<td width="100px" height="50px">
									<p style="font-size: 23px">Total</p>
								</td>
								<td  width="400px" height="50px" align="right">
									<p style="font-size: 25px; color: #17304E;"><b><?= number_to_currency($jumlah, 'IDR') ;?></b></p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
	$('document').ready(function(){
		$("#provinsi").on('change', function(){
			var id_province = $(this).val();
			$.ajax({
				url : "<?= site_url('Shipping/getCity') ?>",
				type : 'GET',
				data : {
					'id_province': id_province,
				},
				dataType : 'json',
				success : function(data){
					console.log(data);
					var results = data["rajaongkir"]["results"];
					for (var i = 0; i < results.length; i++)
					 {
						$("#kota").append($('<option>',{
							value : results[i]["city_id"],
							text : results[i]['city_name'],
							postal_code : results[i]['postal_code']
						}));
					}
				},
			});
		});
		$("#kota").on('change', function() {
			var pos = $('option:selected', this).attr('postal_code');
			$("#zip").val(pos);
		});
	});
</script>
<?= $this->endSection(); ?>