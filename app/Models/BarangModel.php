<?php 

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
	protected $table = 'barang';
	protected $primarykey = 'id';
	// protected $allowedFields = [
	// 	'nama', 'harga', 'stok', 'gambar', 'keterangan'
	// ];
	// protected $returnType = 'App\Entities\Barang';
	protected $useTimestamps = false;
}