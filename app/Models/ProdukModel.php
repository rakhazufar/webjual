<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedField = ['nama', 'gambar', 'harga', 'jenis', 'caption'];


    public function showProduk($jenis)
    {
        return $this->where(['jenis' => $jenis])->findAll();
    }
    public function showPesanan($pesanan)
    {
        return $this->where(['nama' => $pesanan])->findAll();
    }
    public function showPilihan($id)
    {
        return $this->where(['id' => $id])->findAll();
    }
}
