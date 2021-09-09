<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		return view('/admin/login');
	}

	public function home()
	{
		return view('/admin/home');
	}

	public function tampilproduk()
	{
		return view('/admin/tampil-produk');
	}

	public function tambahproduk()
	{
		return view('/admin/tambah-produk');
	}

	public function editproduk()
	{
		return view('/admin/edit-produk');
	}

	public function tampilpost()
	{
		return view('/admin/tampil-post');
	}

	public function tambahpost()
	{
		return view('/admin/tambah-post');
	}

	public function editpost()
	{
		return view('/admin/edit-post');
	}
}
