<?php

namespace App\Models;
use CodeIgniter\Model;

class ParkiranModel extends Model
{
    protected $table = 'parkiran';
    protected $primaryKey = 'platnomor';
    protected $allowedFields = ['platnomor', 'jenis', 'warna', 'pemilik'];
}
