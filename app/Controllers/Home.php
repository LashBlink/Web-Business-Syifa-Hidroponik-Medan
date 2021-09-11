<?php

namespace App\Controllers;

use App\Models\BlogpostModel;

class Home extends BaseController
{

	protected $blogpost;
	public function __construct()
	{
		$this->blogpost = new BlogpostModel();
	}
	public function index()
	{
		return view('/home/landing_page');
	}

	public function about()
	{
		return view('/home/about');
	}

	public function product()
	{
		return view('/home/produk');
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
