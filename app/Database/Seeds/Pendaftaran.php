<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \CodeIgniter\I18n\Time; //tambahkan ini jika menggunakan format time

class Pendaftaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Nandang',
                'email' => 'nandang007@gmail.com',
                'no_telp' => '08961',
                'jenis_kelamin' => 'Pria',
                'bahasa' => '[Indonesia,Inggris,Arab,Sunda,Jawa]',
                'agama' => 'Islam',
                'tanggal_lahir' => '1975-02-02',
                'jam_daftar' => '20:30:05'
            ],
            [
                'nama' => 'Hermanto',
                'email' => 'hermanto@gmail.com',
                'no_telp' => '08962',
                'jenis_kelamin' => 'Pria',
                'bahasa' => '[Indonesia,Inggris,Arab,Sunda,Jawa]',
                'agama' => 'Islam',
                'tanggal_lahir' => '1975-02-02',
                'jam_daftar' => '20:30:05'
            ],
            [
                'nama' => 'Nandang Hermanto',
                'email' => 'nandang007@gmail.com',
                'no_telp' => '08963',
                'jenis_kelamin' => 'Pria',
                'bahasa' => '[Indonesia,Inggris,Arab,Sunda,Jawa]',
                'agama' => 'Islam',
                'tanggal_lahir' => '1975-02-02',
                'jam_daftar' => '20:30:05'
            ],
            [
                'nama' => 'Roberto',
                'email' => 'roberto@gmail.com',
                'no_telp' => '08964',
                'jenis_kelamin' => 'Pria',
                'bahasa' => '[Indonesia,Inggris,Arab,Sunda,Jawa]',
                'agama' => 'Islam',
                'tanggal_lahir' => '1975-02-02',
                'jam_daftar' => '20:30:05'
            ],
            [
                'nama' => 'Carlos',
                'email' => 'carlos@gmail.com',
                'no_telp' => '08965',
                'jenis_kelamin' => 'Pria',
                'bahasa' => '[Indonesia,Inggris,Arab,Sunda,Jawa]',
                'agama' => 'Islam',
                'tanggal_lahir' => '1975-02-02',
                'jam_daftar' => '20:30:05'
            ],

        ];
        $this->db->table('Pendaftaran')->insertBatch($data);
    }
}