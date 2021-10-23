<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BlogpostModel;
use App\Models\KatagoriModel;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\Request;

class Cart extends BaseController
{

    protected $blogpost;
    protected $produk;
    protected $katagori;
    protected $admin;

    public function __construct()
    {
        $this->blogpost = new BlogpostModel();
        $this->produk = new ProdukModel();
        $this->katagori = new KatagoriModel();
        $this->admin = new AdminModel();
        $this->cart = \Config\Services::cart();
    }

    public function cek()
    {
        $response = $this->cart->contents();
        $data = json_encode($response);
        dd($data);
    }

    public function add()
    {
        $this->cart->insert(array(
            'id'      => $this->request->getVar('id'),
            'qty'     => 1,
            'price'   => $this->request->getVar('price'),
            'name'    => $this->request->getVar('name'),
            'options' => array(
                'gambar' => $this->request->getVar('gambar'),
            )
        ));
        session()->setFlashdata('pesan', 'Barang berhasil ditambahkan ke keranjang');
        return redirect()->to('/home/product');
    }

    public function clear()
    {
        $this->cart->destroy();
    }
}
