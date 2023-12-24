<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profil';
    protected $primaryKey       = 'id_profil';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['visi','misi','tujuan','alamat','no_handphone','email','struktur_organisasi'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'no_handphone' => [
            'rules' => 'max_length[12]|numeric',
            'errors' => [
                'max_length' => 'No Handphone maksimal 12 *',
                'numeric' => 'No Handphone hanya boleh berupa angka'
            ]
        ],
        'visi' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Visi wajib diisi'
            ]
        ]
    ];
    protected $validationMessages   = [
        
    ];
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

   public function getProfil(array $atribut){
    $query = $this->select($atribut)->Get();
    return $query->getResult();
   }


}
