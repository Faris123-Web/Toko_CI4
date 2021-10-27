<?php

namespace App\Controllers;


class Login extends BaseController
{


	public function __construct()
    {

    }

	public function index()
	{

		return view('login');
	}

	public function auth()
	{
		$email = 'admin@gmail.com';
		$password = 'admin';

		$email1 = $this->request->getVar('email');
		$password1 = $this->request->getVar('password');

		if ($email1 == $email) {
			if ($password1 == $password) {
				return redirect()->to('/Dashboard');
			}
			echo "Password Salah";
		}
		echo "Email Salah";
	}
}