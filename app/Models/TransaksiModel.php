<?php 

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table = 'transaksi';
	protected $primarykey = 'id_transaksi';
	protected $allowedFields = [
		'id_barang', 'email', 'nama', 'no_tlp', 'alamat', 'metode_pembayaran', 'jasa_kirim', 'ongkir', 'jumlah', 'total_harga','sub_total','status'
	];
	// protected $returnType = 'App\Entities\Barang';
	protected $useTimestamps = false;

}