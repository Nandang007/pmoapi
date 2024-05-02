<?php
namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Pendaftaran extends ResourceController
{
    protected $modelName = 'App\Models\PendaftaranModel';
    protected $format = 'json';

    public function __construct()
    {

    }
    public function index()
    {
        return $this->respond($this->model->findAll());
    }
    public function create()
    {
        $data = $this->request->getPost();

        $pendaftaran = new \App\Entities\Pendaftaran();
        $pendaftaran->fill($data);

        // Validasi data menggunakan aturan yang sudah ditentukan di model
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }

        if ($this->model->save($pendaftaran)) {
            return $this->respondCreated($pendaftaran, 'pendaftaran created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;

        if (!$this->model->findById($id)) {
            return $this->fail('id tidak ditemukan');
        }
        $pendaftaran = new \App\Entities\Pendaftaran();
        $pendaftaran->fill($data);

        // Validasi data menggunakan aturan yang sudah ditentukan di model
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }

        if ($this->model->save($pendaftaran)) {
            return $this->respondUpdated($pendaftaran, 'pendaftaran updated');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('id tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id . ' Deleted']);
        }
    }

    public function show($id = null)
    {
        $data = $this->model->findById($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->fail('id tidak ditemukan');
    }
}