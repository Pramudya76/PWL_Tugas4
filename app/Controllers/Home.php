<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_home');
    }

    public function hello($nama=null) {
        $data['nama'] = $nama;
        $data['judul'] = 'Judul halaman';
        return view('front', $data);
    }

    public function kategori() {
        return view('kategori');
    }

    public function alatTulis(){
        return view('alattulis');
    }

    public function pakaian() {
        return view('pakaian');
    }

    public function snack() {
        return view('snack');
    }

    public function produk() {
        return view('v_produk');
    }

    public function keranjang() {
        return view('v_keranjang');
    }


}
