<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BlogpostModel;
use App\Models\KatagoriModel;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\Request;

class Admin extends BaseController
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
	}

	public function index()
	{
		return view('/admin/login');
	}

	public function ceklogin()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$user = $this->admin->ceklogin($username, $password);
		$pegawai = $this->admin->ceklogin($username, $password);

		if (($pegawai['username'] == $username) && ($pegawai['password'] == $password)) {
			session()->set('username', $pegawai['username']);
			session()->set('password', $pegawai['password']);

			return redirect()->to('/admin/home');
		} else {
			session()->setFlashdata('gagallogin', 'Username atau Password salah, silahkan coba lagi!!');
			return redirect()->to('/admin');
		}
	}

	public function logout()
	{
		session()->destroy();
		session()->setFlashdata('logout', 'anda telah logout');
		return redirect()->to('/admin');
	}

	public function home()
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		return view('/admin/home');
	}

	public function tampilproduk()
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		$data = [
			'produk' => $this->produk->getproduk()
		];

		return view('/admin/tampil-produk', $data);
	}

	public function tambahproduk()
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		$data = [
			'katagori' => $this->katagori->getKatagori()
		];

		return view('/admin/tambah-produk', $data);
	}

	public function saveproduk()
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		$file = $this->request->getFile('gambarproduk');
		$file->move('assets/uploadimg');
		$gambar = $file->getName();

		$this->produk->save([
			'namaproduk' => $this->request->getVar('namaproduk'),
			'gambarproduk' => $gambar,
			'kodekatagori' => $this->request->getVar('katagori'),
			'deskripsiproduk' => $this->request->getVar('deskripsi')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil ditambahakan');

		return redirect()->to('/admin/tampilproduk');
	}

	public function editproduk($namaproduk)
	{ //auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		$data = [
			'produk' => $this->produk->getproduk($namaproduk),
			'katagori' => $this->katagori->getKatagori()
		];
		return view('/admin/edit-produk', $data);
	}

	public function updateproduk($kodeproduk)
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		$file = $this->request->getFile('gambarproduk');

		if ($file->getError() == 4) {
			$gambar = $this->request->getVar('gambarproduklama');
		} else {
			$gambar = $file->getName();
			$file->move('assets/uploadimg');
			unlink('assets/uploadimg/' . $this->request->getVar('gambarproduklama'));
		}

		$this->produk->save([
			'kodeproduk' => $kodeproduk,
			'namaproduk' => $this->request->getVar('namaproduk'),
			'gambarproduk' => $gambar,
			'kodekatagori' => $this->request->getVar('katagori'),
			'deskripsiproduk' => $this->request->getVar('deskripsi')

		]);

		session()->setFlashdata('pesan', 'Data Berhasil diedit');

		return redirect()->to('/admin/tampilproduk');
	}

	public function deleteproduk($kodeproduk)
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		$produk = $this->produk->find($kodeproduk);

		$this->produk->delete($kodeproduk);
		unlink('assets/uploadimg/' . $produk['gambarproduk']);

		session()->setFlashdata('pesan', 'Data Berhasil dihapus');
		return redirect()->to('/admin/tampilproduk');
	}

	public function tampilpost()
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}

		$data = [
			'post' => $this->blogpost->getBlogpost()
		];

		return view('/admin/tampil-post', $data);
	}

	public function tambahpost()
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}


		return view('/admin/tambah-post');
	}

	public function savepost()
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}


		$file = $this->request->getFile('gambar');
		$file->move('assets/uploadimg');
		$gambar = $file->getName();

		$this->blogpost->save([
			'judul' => $this->request->getVar('judul'),
			'gambar' => $gambar,
			'link' => $this->request->getVar('link'),
			'deskripsi' => $this->request->getVar('deskripsi'),
		]);

		session()->setFlashdata('pesan', 'Data Berhasil ditambahakan');

		return redirect()->to('/admin/tampilpost');
	}

	public function editpost($judul)
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}


		$data = [
			'post' => $this->blogpost->getBlogpost($judul)
		];

		return view('/admin/edit-post', $data);
	}

	public function update($id)
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}


		$file = $this->request->getFile('gambar');

		if ($file->getError() == 4) {
			$gambar = $this->request->getVar('gambarlama');
		} else {
			$gambar = $file->getName();
			$file->move('assets/uploadimg');
			unlink('assets/uploadimg/' . $this->request->getVar('gambarlama'));
		}

		$this->blogpost->save([
			'id' => $id,
			'judul' => $this->request->getVar('judul'),
			'gambar' => $gambar,
			'link' => $this->request->getVar('link'),
			'deskripsi' => $this->request->getVar('deskripsi'),

		]);

		session()->setFlashdata('pesan', 'Data Berhasil diedit');

		return redirect()->to('/admin/tampilpost');
	}


	public function deletepost($id)
	{
		//auth
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login !!!');
			return redirect()->to('/admin');
		}


		$post = $this->blogpost->find($id);

		unlink('assets/uploadimg/' . $post['gambar']);
		$this->blogpost->delete($id);

		session()->setFlashdata('pesan', 'Data Berhasil dihapus');
		return redirect()->to('/admin/tampilpost');
	}
}
