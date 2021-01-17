<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{

    public function index($id)
    {
        $data = [
            'produk' => $this->allProduk->where(['id' => $id])->first()
        ];
        return view('pembayaran/index', $data);
    }
}
