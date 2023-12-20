<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'galeri';
    protected $primaryKey       = 'id_galeri';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul','gambar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_dibuat';
    protected $updatedField  = 'tanggal_diperbarui';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'judul' => [
            'rules' => 'required|max_length[20]',
            'errors' => [
                'required' => 'Judul Wajib Diisi',
                'max_length' => 'Batas jumlah huruf dalam judul maksimal 20'
            ]
        ]
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

    public function GetDataGaleriRandom(){
        $query = $this->db->table('galeri')
            ->orderBy('RAND()')
            ->limit(2)
            ->get();

            return $query->getRow();
    }

}
