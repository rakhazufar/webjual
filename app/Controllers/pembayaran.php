<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{

    public function index()
    {
        $data = [
            'fixed' => '',
            'produk' => $this->allProduk->findAll()
        ];
        return view('pembayaran/index', $data);
    }


    public function konfirmasi()
    {
        $this->pesanan->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'pesanan1' => $this->request->getVar('pesanan1'),
            'jumlah1' => $this->request->getVar('jumlah1'),
            'pesanan2' => $this->request->getVar('pesanan2'),
            'jumlah2' => $this->request->getVar('jumlah2'),
            'pesanan3' => $this->request->getVar('pesanan3'),
            'jumlah3' => $this->request->getVar('jumlah3'),
        ]);

        session()->setFlashdata('pesan', 'Pembelian berhasil. Silahkan kirim bukti pembayaran via whatsapp.');

        return redirect()->to('/pembayaran/index');
    }
}
