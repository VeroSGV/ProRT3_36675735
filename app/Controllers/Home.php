<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): void 
    {
        $data['titulo'] = 'index';
        echo view('front/head_view', $data);
        echo view('front/navbar_vew');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    public function Nosotros():void
    {
        $data['titulo'] = 'Nosotros';
        echo view('front/head_view', $data);
        echo view('front/navbar_vew');
        echo view('front/Nosotros');
        echo view('front/footer_view');
    }


    public function login():void 
    {
        $data['titulo'] = 'login';
        echo view('front/head_view', $data);
        echo view('front/navbar_vew');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function registro():void 
    {
        $data['titulo'] = 'registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_vew');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

   
}


