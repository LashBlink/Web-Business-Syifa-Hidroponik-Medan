<?php

namespace App\Controllers;

use App\Models\BlogpostModel;
use App\Models\ProdukModel;

class Home extends BaseController
{

	protected $blogpost;
	protected $produk;

	public function __construct()
	{
		$this->blogpost = new BlogpostModel();
		$this->produk = new ProdukModel();
	}
	public function index()
	{
		$data = [
			'post' => $this->blogpost->getBlogpost3()
		];

		return view('/home/landing_page', $data);
	}

	public function about()
	{
		return view('/home/about');
	}

	public function product()
	{
		$data = [
			'produk' => $this->produk->getproduk()
		];

		return view('/home/produk', $data);
	}

	public function detailproduk($namaproduk)
	{
		$data = [
			'produk' => $this->produk->getproduk($namaproduk)
		];

		//jika data tidak ada di tabel
		if (empty($data['produk'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk ' . $namaproduk . ' tidak ditemukan');
		}

		return view('/home/detailproduk', $data);
	}

	public function blog()
	{

		$data = [
			'post' => $this->blogpost->getBlogpost()
		];

		return view('/home/blog', $data);
	}

	public function detailblog($judul)
	{
		$data = [
			'post' => $this->blogpost->getBlogpost($judul)
		];

		//jika komik tidak ada di tabel
		if (empty($data['post'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Postingan ' . $judul . ' tidak ditemukan');
		}

		return view('/home/detailblog', $data);
	}
}
