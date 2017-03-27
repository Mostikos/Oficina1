<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages/index');
	}

	public function getServicos(){
		return view('pages/servicos');
	}


	public function getContactos(){
		return view('pages/contactos');
	}

	public function getLogin(){
		return view('pages/login');
	}	

	public function getTeste(){
		$first = 'Bertino';
		$last = 'Ferreira';

		$fullname = $first." ".$last;
		$email = "teste@gmail.com";
		//with(nomedavariavelnaview, variavel);
		//withFullname($fullname); vai se chamar full;
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		return view('pages/teste')->withFullname($fullname)->withEmail($email)->withData($data);
	}


}

?>