<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table            = 'contacts';
    protected $primaryKey       = 'SN';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['name', 'email', 'message', 'mailid', 'date_time_sent', 'userid', 'has_viewed', 'has_replied', 'replied_message', 'date_time_replied', 'who_replied'];

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

    public function getLastMessages(int $number = 10)
    {
        return $this->orderBy('date_created', 'DESC')->limit($number)->findAll();
    }

    public function getLastUnreadMessages(int $number = 10)
    {
        // return $this->orderBy('date_created', 'DESC')->limit($number)->findAll();
        return $this->orderBy('date_time_sent', 'DESC')->where('has_viewed', 0)->limit($number)->findAll();
    }

}
