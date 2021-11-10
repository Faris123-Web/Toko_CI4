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
			'jumlah' => [
				'type'       => 'VARCHAR',
				'constraint' => 50,
			],
			'total_harga' => [
				'type'       => 'TEXT',	
			],
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
