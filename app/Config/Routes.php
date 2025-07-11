<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal_ultimo', 'Home::index');
$routes->get('Nosotros', 'Home::Nosotros');
$routes->get('registro', 'Home::Registro');
$routes->get('login', 'Home::Login');
/*
/*rutas del registro de usuario*/
$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');
/*
/*rutas del login*/
$routes->get('/panel','Login_controller');
$routes->post('/enviarlogin','Login_controller::auth');
$routes->get('/panel','Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout','Login_controller::logout');




