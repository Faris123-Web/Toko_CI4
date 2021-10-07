<?php 

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
	protected $table = 'barang';
	protected $primarykey = 'id';
	protected $allowedFields = [
		'nama_barang', 'harga', 'stok', 'foto', 'keterangan'
	];
	// protected $returnType = 'App\Entities\Barang';
	protected $useTimestamps = false;

	public function getDetail($id = false)
	{
		if ($id == false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}