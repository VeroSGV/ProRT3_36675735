<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
public funtion __construc(){
	helper(['form', 'url']);
}

public function create(){

	$dato['titulo'] = 'registro';
	echo view('front/head_view',$dato);
	echo view('front/navbar_vew');
	echo view('back/usuario/registro');
	echo view('front/footer_view');
}

public function formValidation(){

	$input = $this->validate([
		'nombre' => 'required |min_length[3]',
		'apellido' =>'required |min_length[3]|max_length[25]',
		'usuario' => 'required |min_length[3]',
		'email' => 'required |min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
		'pass' => 'required|min_length[3]|max_length[10]'

	],
);
 $formModel = new Usuarios_model();

 if (!$input){
 		$dato['titulo']='Registro';
 		echo view('front/head_view',$dato);
		echo view('front/navbar_vew');
		echo view('back/usuario/registro', ['validation' => $this->validator]);
		echo view('front/footer_view');
 } else{
 	 $formModel->save([
 	 	'nombre' => $this->request->getVar('nombre'),
 	 	'apellido' => $this->request->getVar('apellido'),
 	 	'usuario' => $this->request->getVar('usuario'),
 	 	'email' => $this->request->getVar('email'),
 	 	'pass' => password_hash($this->request->getVar('pass'),PASSWORD_DEFAULT)
 	 ]);

 	 	session()->setFlashdata('success', 'Usuario registrado con exito');
 	 	return $this->response->redirect('/login');

 }

}

}