<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    protected $BarangModel;
    public function __construct()
    {
    	$this->BarangModel = new BarangModel();
        helper('form');
        //memanggil library cart
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        // $barang = $this->BarangModel->findAll();
    	$data = [
    		'barang' => $this->BarangModel->getDetail(),
    	];
        $data['item'] = $this->cart->totalItems();
        return view('landingpage', $data);
    }

    public function detail($id)
    { 
        $data = [
            'detail' => $this->BarangModel->getDetail($id)
        ];

        return view('detail', $data);
    }

    public function cart()
    {
        return view('cart');
    }
}
