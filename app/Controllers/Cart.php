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

		//memanggil library cart
		$this->cart = \Config\Services::cart();
	}

	public function index()
	{


		$data['item'] = $this->cart->totalItems();

		return view('cart', $data);
	}

	public function add()
	{

		$this->cart->insert(array(
			'id'      => 'sku_1234ABCD',
			'qty'     => 1,
			'price'   => '19.56',
			'name'    => 'T-Shirt',
			'options' => array('Size' => 'L', 'Color' => 'Red')
		));
	}

	public function clear()
	{
	
		$this->cart->destroy();
	}
}	