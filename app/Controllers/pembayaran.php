<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{

    public function index()
    {
        $data = [
            'fixed' => '',
            'produk' => $this->allProduk->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('pembayaran/index', $data);
    }


    public function konfirmasi()
    {
        //validasi pemebelian
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} ini harus diisi.'
                ]
            ],
            'alamat' =>
            [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} ini harus diisi.'
                ]
            ],
            'pesanan1' => 'required',
            'jumlah1' =>
            [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pesan Minimal 1 produk.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pembayaran/index')->withInput()->with('validation', $validation);
        }

        if ($this->request->getVar('pesanan2') != "kosong") {
            $barang2 = explode('|', $this->request->getVar('pesanan2'));
        } else {
            $barang2 = null;
        }

        if ($this->request->getVar('pesanan3') != "kosong") {
            $barang3 = explode('|', $this->request->getVar('pesanan3'));
        } else {
            $barang3 = null;
        }

        $barang1 = explode('|', $this->request->getVar('pesanan1'));

        $data = [
            'fixed' => 'fixed-bottom',
            'pembelian' => [
                'pesanan1' => $barang1,
                'pesanan2' => $barang2,
                'pesanan3' => $barang3,
                'harga1' => intval($barang1),
                'harga2' => intval($barang2),
                'harga3' => intval($barang3),
                'jumlah1' => intval($this->request->getVar('jumlah1')),
                'jumlah2' => intval($this->request->getVar('jumlah2')),
                'jumlah3' => intval($this->request->getVar('jumlah3')),
            ]
        ];

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

        session()->setFlashdata('pesan', 'Pembelian berhasil. Pesanan anda telah tersimpan. Anda dapat meninggalkan halaman ini, silahkan kirim bukti pembayaran melalui whatsapp.');

        return view('/pembayaran/selesai', $data);
    }
}
