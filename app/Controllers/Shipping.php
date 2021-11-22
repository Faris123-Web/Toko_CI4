<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Shipping extends BaseController
{
	private $url = "https://api.rajaongkir.com/starter/";
	private $apiKey = "b2eadcda5f681223dc713a157b9d4a66";

	public function __construct()
	{
		// memanggil product model
		$this->BarangModel = new BarangModel();

		//memanggil library cart
		$this->cart = \Config\Services::cart();

		helper('number');
		helper('form');
	}
	

	public function index()
	{
		$provinsi = $this->rajaongkir('province');
		$data = [
		'cart' => \Config\Services::cart(),
		'provinsi' => json_decode($provinsi)->rajaongkir->results, 
		];
		return view('shipping', $data);
	}

	public function add()
	{
		$data = $this->request->getPost();
		print_r($data);
		
		$pro = $this->request->getPost('provinsi');
		$kot = $this->request->getPost('kota');

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
			CURLOPT_POSTFIELDS => "origin=501&destination=$kot&weight=1000&courier=jne",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: ".$this->apiKey
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		print_r($response);
	}

	public function getCity()
	{
		if ($this->request->isAJAX())
		 {
			$id_province = $this->request->getGet('id_province');
			$data = $this->rajaongkir('city', $id_province);

			return $this->response->setJSON($data);
		}
	}

	private function rajaongkir($method, $id_province=null)
	{
		
		$endPoint = $this->url.$method;

		if($id_province!=null)
		{
			$endPoint = $endPoint."?province=".$id_province;
		}

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $endPoint,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: ".$this->apiKey
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return $response;
	}

	public function invoice()
    {
    	
    	return view('invoice');
    }
}	