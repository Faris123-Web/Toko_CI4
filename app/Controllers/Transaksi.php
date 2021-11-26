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
            'transaksi' => $transaksi,
        ];

        return view('dashboard/transaksi', $data);
    }

    public function get_data()
    {
        $id = $this->request->getGet('id_transaksi');
        $transaksi = $this->TransaksiModel->where(['id_transaksi' => $id])->first();
        

        echo json_encode($transaksi);
    }

    public function update()
    {
        $id = $this->request->getVar('edit_id');
        // dd($this->request->getVar());
        $data = [
            'status'  => $this->request->getVar('status'),
        ];

        $this->TransaksiModel->set($data);
        $this->TransaksiModel->where('id_transaksi', $id);
        $this->TransaksiModel->update();

        return redirect()->to('Transaksi');
    }
}
