<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'pesanan' => $this->pesanan->findAll()
        ];
        return view('admin/index', $data);
    }

    public function delete($id)
    {
        $this->pesanan->delete($id);
        session()->setFlashdata('hapus', 'Data berhasil dihapus');

        return redirect()->to('/Admin');
    }
}
