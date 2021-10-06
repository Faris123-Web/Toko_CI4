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
					<button type="button" class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#editModal" onclick="edit(<?= $b['id']; ?>)">Edit</button>
					<a href="/Barang/hapus/<?= $b['id']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>