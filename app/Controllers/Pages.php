<?php

namespace App\Controllers;


class Pages extends BaseController
{

    public function index()
    {

        $data = [
            'produk' => $this->allProduk->showProduk('Madu')
        ];
        return view('index', $data);
    }
    //--------------------------------------------------------------------

}
