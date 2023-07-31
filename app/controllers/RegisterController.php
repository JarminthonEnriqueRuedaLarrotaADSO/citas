<?php

namespace Adso\controllers;

use Adso\Libs\controller;

class RegisterController extends controller
{
    protected $model;

    function __construct()
    {
    }

    function index()
    {
        $data = [
            "titulo" => "Registro",
            "subtitulo" => "Formulario de registro"
        ];

        $this->view('register', $data, 'auth');
    }
}
