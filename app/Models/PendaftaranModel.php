<?php
namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'email',
        'no_telp',
        'jenis_kelamin',
        'bahasa',
        'agama',
        'tanggal_lahir',
        'jam_daftar'
    ];

    protected $validationRules = [
        'nama' => 'required',
        'email' => 'required|valid_email'
    ];
    protected $validationMessages = [
        'nama' => [
            'required' => 'silakan masukan nama'
        ],
        'email' => [
            'required' => 'silakan masukan email',
            'valid_email' => 'silakan masukan email yang valid',
        ]
    ];
    protected $returnType = 'App\Entities\Pendaftaran';
    protected $useTimestamps = false;
    public function findById($id)
    {
        $data = $this->find($id);
        if ($data) {
            return $data;
        }
        return false;
    }
}