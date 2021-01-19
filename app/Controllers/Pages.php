<?php

namespace App\Controllers;


class Pages extends BaseController
{

    public function index()
    {

        $data = [
            'produk' => $this->allProduk->showProduk('Madu'),
            'fixed' => ''
        ];
        return view('index', $data);
    }

    public function none()
    {
        $data = [
            'fixed' => 'fixed-bottom'
        ];
        return view('none', $data);
    }
    //--------------------------------------------------------------------

}
