<?php

namespace App\Models;

use CodeIgniter\Model;

class Belanja extends Model
{
    protected $table = 'belanja';
    protected $allowedFields = ['user', 'barang', 'harga', 'jumlah'];
}
