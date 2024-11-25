<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        // Membuat tabel pelanggan dengan beberapa field
        $this->forge->addField([
            'id_pelanggan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
            'nama_pelanggan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat_pelanggan' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '15',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        // Menambahkan primary key pada kolom 'id_pelanggan'
        $this->forge->addPrimaryKey('id_pelanggan');
        
        // Membuat tabel pelanggan
        $this->forge->createTable('pelanggan');
    }

    public function down()
    {
        // Menghapus tabel pelanggan jika migration dibatalkan
        $this->forge->dropTable('pelanggan');
    }
}
