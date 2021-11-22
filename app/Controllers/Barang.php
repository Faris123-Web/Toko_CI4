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
    
    public function get_data()
    {
        $id = $this->request->getGet('id');
        $barang = $this->BarangModel->where(['id' => $id])->first();
        

        echo json_encode($barang);
    }

    public function tambah()
    {
    	$gambar = $this->request->getFile('gambar');
    	$gambar->move('assets/img');
    	$nama_gambar = $gambar->getName();

    	$this->BarangModel->save([
    		'nama_barang' => $this->request->getVar('name'),
    		'stok' => $this->request->getVar('jumlah'),
    		'harga' => $this->request->getVar('harga'),
    		'keterangan' => $this->request->getVar('keterangan'),
    		'foto' => $nama_gambar
    	]);

    	return redirect()->to('/barang');
    }

    public function edit()
    {
        // $gambar = $this->request->getFile('gambar');
        // $gambar->move('assets/img');
        // $nama_gambar = $gambar->getName();

        $this->BarangModel->save([
            'id' => $this->request->getVar('id'),
            'nama_barang' => $this->request->getVar('name'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
            'keterangan' => $this->request->getVar('keterangan'),
            'foto'  => $this->request->getVar('foto'),
        ]);

        return redirect()->to('/barang');
    }

    public function hapus($id)
    {
    	$this->BarangModel->delete($id);

    	return redirect()->to('/barang');
    }
}
