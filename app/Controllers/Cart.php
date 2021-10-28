<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Cart extends BaseController
{
	public function __construct()
	{
		// memanggil product model
		$this->BarangModel = new BarangModel();

		// memanggil form helper
		helper('form');
		
		helper('number');

		//memanggil library cart
		$this->cart = \Config\Services::cart();
	}

	public function cek()
	{
		$data = $this->cart->contents();
		print_r($data);
	}	

	public function index()
	{


		$data = [
		'item' => $this->cart->totalItems(),
		'cart' => \Config\Services::cart()
		];

		return view('cart', $data);
	}

	public function add()
	{

		$this->cart->insert(array(
			'id'      => $this->request->getPost('id'),
			'qty'     => 1,
			'price'   => $this->request->getPost('price'),
			'name'    => $this->request->getPost('name'),
			'options' => array(
				'foto' => $this->request->getPost('foto')
			)
		));

		return redirect()->to(base_url('home'));
	}

	public function clear()
	{
	
		$this->cart->destroy();
	}
}	