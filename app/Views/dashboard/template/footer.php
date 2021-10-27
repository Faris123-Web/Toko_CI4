<script type="text/javascript">
	$(document).ready( function () {
		$('#table1').DataTable();
	});

	// $.ajax({
	// 	url: "<?= base_url('Barang/get_data') ?>",
	// 	dataType: "json",
	// 	success: function(res) {
	// 		$(".data-barang").html(res)
	// 	}
	// })

</script>
<script type="text/javascript">
	(function( $ ) {
		$(document).ready(function() {
			$('.edit-data').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const stok = $(this).data('stok');
            const harga = $(this).data('harga');
            const keterangan = $(this).data('keterangan');
            const foto = $(this).data('foto');
            // Set data to Form Edit
            $('#edit_id').val(id);
            $('#edit_name').val(name);
            $('#edit_stok').val(stok);
            $('#edit_harga').val(harga);
            $('#edit_keterangan').val(keterangan);
            $('#edit_foto').val(foto);
            $('#editModal').modal('show');
            // Call Modal Edit
        });
		});
	})(jQuery);
</script>