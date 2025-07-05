<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id';

    protected $allowedFields = ['tanggal', 'nominal', 'created_at', 'updated_at'];

    // Aktifkan fitur timestamps otomatis
    protected $useTimestamps = true;

    // Nama kolom timestamp (optional jika kamu pakai nama default)
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
