<?php

namespace App/Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{

public function before(RequestInterface $request, $arguments = null)
{
//si el usuario no esta logueado
  if (!session()->get('logged_in')){
//entonces redirecciona a la pagina de login page
		return reedirect()->to('/login')  	
}	
}
//------------------------------------------------------------------
public function after(RequestInterface $request, RequestInterface $response, $argument = null)	
{
 //Do something	here
}
}