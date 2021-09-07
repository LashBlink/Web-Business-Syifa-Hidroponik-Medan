<?php

namespace App\Controllers;

class Home extends BaseController
{
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
		return view('/home/blog');
	}
}
