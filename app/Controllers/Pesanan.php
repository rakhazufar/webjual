<?php

namespace App\Controllers;


class Pesanan extends BaseController
{
    public function semuaPesanan($id)
    {
        $data = [
            'fixed' => 'fixed-bottom',
            'produk' => $this->allProduk->where(['id' => $id])->findAll()
        ];
        return view('/pembayaran/pesanan', $data);
    }

    public function belanjaan()
    {
        $this->belanja->save([
            'user' => $this->request->getVar('user'),
            'barang' => $this->request->getVar('barang'),
            'harga' => $this->request->getVar('harga'),
            'jumlah' => $this->request->getVar('jumlah')
        ]);

        return redirect()->to('/Pages/index');
    }
}
