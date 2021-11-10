<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => true,
			],
			'nama_barang' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'harga' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'keterangan' => [
				'type'       => 'TEXT',	
			],
			'foto' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'stok' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
		]);

		//primary key
		$this->forge->addKey('id', TRUE);
		//membuat table
		$this->forge->createTable('barang', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('barang')
    }
}
