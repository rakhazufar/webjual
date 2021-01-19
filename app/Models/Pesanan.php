<?php

namespace App\Models;

use CodeIgniter\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $allowedFields = ['nama', 'email', 'alamat', 'pesanan1', 'jumlah1', 'pesanan2', 'jumlah2', 'pesanan3', 'jumlah3'];
}
