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
        return view('template/layout', $data);
    }

    public function detail($id)
    { 
        $data = [
            'detail' => $this->BarangModel->getDetail($id)
        ];

        return view('template/detail', $data);
    }

    public function cart()
    {
        return view('template/cart');
    }
}
