<?php

namespace App\Controllers;


class semuaPesanan extends BaseController
{
    public function bayar()
    {
        $data = [
            'fixed' => 'fixed-bottom',
            'pesanan' => $this->belanja->where(['user' => 'rakha'])->findAll()
        ];
        return view('/bayar/pembayaran', $data);
    }
}
