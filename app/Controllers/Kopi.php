<?php

namespace App\Controllers;


class Kopi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kopi',
            'produk' => $this->allProduk->showProduk('Kopi')
        ];

        return view('kopi/index', $data);
    }

    //--------------------------------------------------------------------

}
