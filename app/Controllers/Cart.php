<?php

namespace App\Controllers;

class Cart extends BaseController
{

    public function index()
    {
        $data = [
            'fixed' => '',
            'total' => $this->total(),
            'items' => array_values(session('cart')),
            'produk' => $this->allProduk->showProduk('Madu')
        ];
        return view('cart/index', $data);
    }

    public function buy($id)
    {
        $produk = $this->allProduk->find($id);
        $item = [
            'id' => $produk['id'],
            'nama' => $produk['nama'],
            'harga' => $produk['harga'],
            'gambar' => $produk['gambar'],
            'quantity' => 1
        ];

        $session = session();
        if ($session->has('cart')) {
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if ($index == -1) {
                array_push($cart, $item);
            } else {
                $cart[$index]['quantity']++;
            }
            $session->set('cart', $cart);
        } else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        return $this->response->redirect(site_url('cart/index'));
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('cart/index'));
    }
    public function update()
    {
        $cart = array_values(session('cart'));
        for ($i = 0; $i < count($cart); $i++) {
            $cart[$i]['quantity'] = $_POST['quantity'][$i];
        }
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('cart/index'));
    }

    private function exists($id)
    {
        $items = array_values(session('cart'));
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }
    private function total()
    {
        $s = 0;
        if (session('cart')) {
            $items = array_values(session('cart'));

            foreach ($items as $item) {
                $s += $item['harga'] * $item['quantity'];
            }
        }
        return $s;
    }

    public function bayar()
    {
        $data = [
            'fixed' => '',
            'total' => $this->total(),
            'pesanan' => array_values(session('cart'))
        ];
        return view('cart/bayar', $data);
    }

    public function inputPesanan()
    {
        $buyer = $this->request->getvar();
        $pesanan = implode(" | ", $buyer);

        $this->pesanan->save([
            'Pesanan' => $pesanan
        ]);

        $data = [
            'fixed' => 'fixed-bottom'
        ];

        session()->setFlashData('pesanan', 'Pembelian anda berhasil.');

        return view("cart/selesai", $data);
    }
}
