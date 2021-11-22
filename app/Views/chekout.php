<?= $this->extend('template/shipping'); ?>
<?= $this->section('content'); ?>

<main>
	<div class="container mt-5">
		<h1 class="display-6 fw-bold">Checkout</h1>
		<div class="card">
			<?php echo form_open('Chekout/add');?>
			<input type="hidden" name="email" value="<?= $email?>" >
			<input type="hidden" name="id_barang" value="<?= $id_barang?>">
			<input type="hidden" name="jumlah" value="<?= $jumlah?>">
			<input type="hidden" name="total_harga" value="<?= $total_harga?>">
			<input type="hidden" name="alamat" value="<?= $alamat.",".$kot.",".$pro.",".$zip?>">
			<input type="hidden" name="nama_depan" value="<?= $nama_depan?>">
			<input type="hidden" name="nama_belakang" value="<?= $nama_belakang?>">
			<input type="hidden" name="tlp" value="<?= $tlp?>">
			<table >
				<tbody>
					<tr>
						<td class="px-4 py-3" style="width: 300px; font-size: 20px" ><i class="fas fa-map-marker-alt"></i>&nbsp;Alamat Pengiriman</td>
					</tr>
					<tr>
						<td  class="px-4 py-2" style="font-size: 18px;" name="data_diri"><b><?= $nama_depan.$nama_belakang?></b><br><?= $tlp?></td>
						<td class="px-4 py-2" style="font-size: 18px; text-align: justify;" name="alamat"><?= $alamat ?>, <?= $kot ?>, <?= $pro ?>, ID <?= $zip ?></td>
					</tr>
					<tr>
						<td class="px-4 py-2" colspan="2" align="center"><hr>
							<a href="#" class="fw-bold" style="color:black; font-size: 23px; text-decoration: none;">Ubah</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="card mt-3">
			<table>
				<tbody>
					<td class="border-right px-4 pt-3" align="center" style="font-size: 18px;"><b>OPSI PENGIRIMAN : </b>
						<p>
							<div class="form-group">
								<select class="custom-selected" id="kurir" name="kurir">
									<option>Pilih Kurir</option>
									<option value="jne">JNE</option>
									<option value="pos">POS</option>
									<option value="tiki">TIKI</option>
								</select>
							</div>
						</p>
					</td>

					<td  style="font-size:18px" colspan="2" width="54%" class="px-4">Paket Pilihan 
						<p>
							<div class="form-group">
								<select class="custom-selected-1" id="paket" name="paket">
									<option>Pilih Paket</option>
								</select>
							</div>
						</p>
						<p id="estimasi">
							Akan di terima dalam 
						</p>
					</td>
					<td  style="font-size:18px">
						Ongkos Kirim :
						<p>
							<div class="form-group">
								<b id="ongkir" name="ongkir">Rp. 0</b>
							</div>
						</p>
					</td>
				</tbody>
			</table>
		</div>

		<div class="card mt-3">
			<table>
				<tbody>
					<td class="border-right px-4 pt-3" align="center" width="30%" style="font-size: 18px;"><b>OPSI PENGIRIMAN : </b>
					</td>

					<td style="font-size:18px" class="px-4">
						<p class="text-end"><a href="" style="text-decoration: none; color: black;">Lihat Semua</a></p>

						<div class="form-check text-end">
							<input class="form-check-input" type="radio" name="bank" id="flexRadioDefault1" value="transfer">
							<div class="d-flex">
								<img src="<?= base_url('assets/img/university-solid.svg') ?>" alt="" width="50px" height="50px" class="d-inline-block align-text-top">
								<div class="px-3">
									<p class=" text-start fw-bold m-0">
										Transfer Bank
									</p>
									<p>Bayar dengan mudah dan cepat</p>
								</div>
							</div>
						</div>

						<hr>

						<div class="form-check text-end">
							<input class="form-check-input" type="radio" name="bank" id="flexRadioDefault1" value="e-wallet">
							<div class="d-flex">
								<img src="<?= base_url('assets/img/wallet-solid.svg') ?>" alt="" width="50px" height="50px" class="d-inline-block align-text-top">
								<div class="px-3">
									<p class=" text-start fw-bold m-0">
										E-Wallet
									</p>
									<p>Bayar dengan mudah dan cepat</p>
								</div>
							</div>
						</div>

						<hr>

						<div class="form-check text-end">
							<input class="form-check-input" type="radio" name="bank" id="flexRadioDefault1" value="paypal">
							<div class="d-flex">
								<img src="<?= base_url('assets/img/cc-paypal-brands.svg') ?> " alt="" width="50px" height="50px" class="d-inline-block align-text-top">
								<div class="px-3">
									<p class=" text-start fw-bold m-0">
										Paypal
									</p>
									<p>Bayar dengan mudah dan cepat</p>
								</div>
							</div>
						</div>

					</td>


				</tbody>
			</table>
		</div>

		<div class="card">
			<table>
				<tbody>
					<tr>
						<td class="px-4 py-3 fw-bold" style=" font-size: 20px" >Ringkasan Pembayaran</td>
					</tr>
					<tr>
						<td  class="px-4 py-2" style="width: 70%; font-size: 18px;"><?= $jumlah?> Item</td>
						<td class="px-4 py-2 fw-bold " style="font-size: 18px; ">Rp. <?= $total_harga?></td>
					</tr>
					<tr>
						<td  class="px-4 py-2" style="font-size: 18px;">Pengiriman</td>
						<td class="px-4 py-2 fw-bold " style="font-size: 18px; " id="ongkir">Rp. 0</td>
					</tr>
					<tr>
						<td  class="p-4" style="font-size: 18px;">Total Pembayaran</td>
						<td class="fw-bold px-4 " style="color: #FFC107; font-size:25px;" id="total_harga">Rp. <?= $total_harga?></td>
					</tr>
					<tr><td class="px-4" colspan="2"><hr></td></tr>
					<tr>
						<td  class="p-4" style="font-size: 18px;">Dengan melanjutkan, saya setuju dengan Syarat dan Ketentuan yang berlaku</td>
						<td class="fw-bold px-4 "><button type="submit" style="background: #17304E; font-size:18px; width: 100%; border-radius:5px;" class="btn btn-secondary">Buat Pesanan</button></td>
					</tr>
				</tbody>
			</table>
			<?php echo form_close(); ?>
		</div>

	</main>
	<?= $this->endSection(); ?>
	<?= $this->section('script'); ?>
	<script>
		$('document').ready(function() {
			var id_kot = "<?= $id_kot?>";
			var harga = "<?= $total_harga?>"
			$("#kurir").on('change', function() {
				var kurir = $(this).val();
				$.ajax({
					url : "<?= site_url('Chekout/getcost') ?>",
					type : 'GET',
					data : {
						'kurir': kurir,
						'id_kot': id_kot,
					},
					dataType : 'json',
					success :function(data){
						console.log(data);
						var results = data["rajaongkir"]["results"][0]["costs"];
						for (var i = 0; i < results.length; i++)
						{
							var text = results[i]["service"];
							$("#paket").append($('<option>',{
								value : results[i]["cost"][0]["value"],
								text : text,
								etd : results[i]["cost"][0]["etd"]
							}));
						}
					},
				});
			});
			$("#paket").on('change', function() {
				var estimasi = $('option:selected', this).attr('etd');
				var ongkir = $(this).val();
				$("#ongkir").html("Rp. "+ongkir);
				$("#estimasi").html("Akan diterima dalam "+estimasi+" Hari");
				var total_harga = (harga+ongkir);
				$("#total_harga").html("Rp. "+total_harga); 
			});
		});
	</script>
	<?= $this->endSection(); ?>