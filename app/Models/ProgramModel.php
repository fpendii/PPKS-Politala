<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'program';
    protected $primaryKey       = 'id_program';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['uraian', 'penyelenggara', 'lokasi', 'waktu'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_dibuat';
    protected $updatedField  = 'tanggal_diubah';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'uraian' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Uraian program wajib diisi'
            ]
        ],
        'penyelenggara' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penyelenggara wajib diisi'
            ]
        ],
        'lokasi' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Lokasi program wajib diisi'
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

    public function getJumlahProgram()
    {
        $query = $this->db->table('program')
            ->select('id_program')
            ->get();

        return count($query->getResult());
    }

    public function getProgram($id)
    {
        return $this->where(['id_program' => $id])->first();
    }
}
