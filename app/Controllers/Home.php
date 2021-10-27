<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    protected $BarangModel;
    public function __construct()
    {
    	$this->BarangModel = new BarangModel();
    }

    public function index()
    {
        // $barang = $this->BarangModel->findAll();
    	$data = [
    		'barang' => $this->BarangModel->getDetail()
    	];
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
