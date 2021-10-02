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
        $barang = $this->BarangModel->findAll();
    	$data = [
    		'barang' => $barang
    	];
        return view('template/layout', $data);
    }


}
