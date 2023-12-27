<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSatuan extends Model
{
    protected $table            = 'tbl_satuan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
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

    public function AllData() {
        return $this->db->table('tbl_satuan')
            ->get()
            ->getResultArray();
    }

    public function InsertData($data) 
    {
        $this->db->table('tbl_satuan')->insert($data);    
    }

    public function UpdateData($data) 
    {
        $this->db->table('tbl_satuan')
        ->where('id_satuan', $data['id_satuan'])    
        ->update($data);
    }

     public function DeleteData($data) 
    {
        $this->db->table('tbl_satuan')
        ->where('id_satuan', $data['id_satuan'])    
        ->delete($data);
    }
}
