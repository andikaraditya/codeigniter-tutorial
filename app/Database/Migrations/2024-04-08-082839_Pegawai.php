<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jabatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            "alamat" => [
                "type" => "TEXT",
                "null" => true,
            ],
            "email" => [
                "type"  => "VARCHAR",
                'constraint' => '50',
            ],
            "created_at" => [
                "type"  => "DATETIME",
                "null" => true,
            ],
            "updated_at" => [
                "type"  => "DATETIME",
                "null" => true,
            ],
        ]);
        $this->forge->addKey('id', true); // primary key
        $this->forge->createTable('pegawai');
    }

    public function down()
    {
        $this->forge->dropTable("pegawai");
    }
}
