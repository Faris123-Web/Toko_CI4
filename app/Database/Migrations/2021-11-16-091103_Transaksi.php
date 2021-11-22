<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
   public function up()
	{
        //
		$this->forge->addField([
			'id_transaksi' => [
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => true,
			],
			'id_barang' => [
				'type' => 'INT',
				'constraint' => 5,
			],
			'email' => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'nama' => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'no_tlp' => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'alamat' => [
				'type'       => 'VARCHAR',
				'constraint' => 500,
			],
			'metode_pembayaran' => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'jasa_kirim' => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'ongkir' => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'jumlah' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
			],
			'total_harga' => [
				'type'       => 'TEXT',	
			],
			'sub_total' => [
				'type'       => 'TEXT',	
			],
			'status' => [
				'type' => 'INT',
				'constraint' => 5,
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		//primary key
		$this->forge->addKey('id_transaksi', TRUE);
		//membuat table
		$this->forge->createTable('transaksi', TRUE);
	}

	public function down()
	{
        //
		$this->forge->dropTable('transaksi');
	}
}
