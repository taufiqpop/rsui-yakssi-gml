<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Beranda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'key' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'value' => [
                'type'       => 'TEXT',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('beranda');
    }

    public function down()
    {
        $this->forge->dropTable('beranda');
    }
}
