<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';


    public function showProduk($jenis)
    {
        return $this->where(['jenis' => $jenis])->findAll();
    }
}
