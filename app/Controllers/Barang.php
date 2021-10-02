<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
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

        return view('dashboard/v_barang', $data);
    }

}
