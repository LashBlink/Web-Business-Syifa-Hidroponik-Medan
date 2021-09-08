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
}
