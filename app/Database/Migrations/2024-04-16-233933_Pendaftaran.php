<?php
namespace App\Database\Migrations;

class Users extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'TEXT'
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 6,
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => 6,
            ],
            'bahasa' => [
                'type' => 'TEXT'
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',

            ],
            'jam_daftar' => [
                'type' => 'TIME',
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('pendaftaran');
    }
    public function down()
    {
        $this->forge->dropTable('pendaftaran');
    }
}