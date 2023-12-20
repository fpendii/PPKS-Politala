<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'materi';
    protected $primaryKey       = 'id_materi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_materi','link_document','tanggal_dibuat'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_dibuat';
    protected $updatedField  = 'tanggal_diperbarui';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'judul_materi' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Judul materi wajib diisi'
            ]
        ],
        'link_document' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Link document materi wajib diisi'
            ]
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getMateri($id){
        return $this->where(['id_materi' => $id])->first();
    }

    public function getRandomMateri(){
        $query = $this->orderBy('RAND()')
                    ->limit(2)
                    ->get();

        return $query->getResultArray();
    }
}
