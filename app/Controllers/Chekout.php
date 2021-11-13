<?php

namespace App\Controllers;

class Chekout extends BaseController
{
	private $url = "https://api.rajaongkir.com/starter/";
	private $apiKey = "b2eadcda5f681223dc713a157b9d4a66";

	public function __construct()
	{
		// memanggil product model
		// $this->BarangModel = new BarangModel();

		//memanggil library cart
		$this->cart = \Config\Services::cart();

		helper('number');
		helper('form');
	}

    public function index()
    {	
    	$jumlah = $this->request->getPost('jumlah');
    	$total_harga = $this->request->getPost('total_harga');
    	$email = $this->request->getPost('email');
    	$nama_depan = $this->request->getPost('nama_depan');
    	$nama_belakang = $this->request->getPost('nama_belakang');
    	$alamat = $this->request->getPost('alamat');
    	$tlp = $this->request->getPost('tlp');
    	$id_barang = $this->request->getPost('id_barang');
		$zip = $this->request->getPost('zip');

		$city = $this->rajaongkir_city();
		$data = [
			'jumlah' => $jumlah,
			'total_harga' => $total_harga,
			'email' => $email,
			'nama_belakang' => $nama_belakang,
			'nama_depan' => $nama_depan,
			'tlp' => $tlp,
			'alamat' => $alamat,
			'id_barang' => $id_barang,
			'pro' => json_decode($city)->rajaongkir->results->province,
			'kot' => json_decode($city)->rajaongkir->results->city_name,
			'id_kot' => json_decode($city)->rajaongkir->results->city_id,
			'zip' => $zip,
		];
        return view('chekout', $data);
    }

    private function rajaongkir_city()
    {
    	$pro = $this->request->getPost('provinsi');
		$kot = $this->request->getPost('kota');

		//cost
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=$kot&province=$pro",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key:".$this->apiKey
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return $response;
    }

    public function getCost()
    {
    	if ($this->request->isAJAX())
		 {
			$kurir = $this->request->getGet('kurir');
			$id_kot = $this->request->getGet('id_kot');
			$data = $this->rajaongkir_cost($kurir, $id_kot);

			return $this->response->setJSON($data);
		}
    }

    private function rajaongkir_cost($kurir, $id_kot)
    {

		//cost
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=501&destination=$id_kot&weight=1000&courier=$kurir",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: ".$this->apiKey
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return $response;
    }

}
