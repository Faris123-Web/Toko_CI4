<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Transaksi extends BaseController
{

    public function __construct()
    {
    	$this->TransaksiModel = new TransaksiModel();
    }

    public function index()
    {
   
    	$transaksi = $this->TransaksiModel->findAll();
        $data = [
            'transaksi' => $transaksi
        ];

        return view('dashboard/transaksi', $data);
    }
}
