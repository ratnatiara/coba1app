<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		// return view('home');
		$data = [
			'title' => 'Home | Catalog Mobil Motor',
			'jenis' => 'home'
		];
		// echo view('layout/header', $data);
		// echo view('home');
		// echo view('layout/footer');
		return view('home', $data);
	}
}
