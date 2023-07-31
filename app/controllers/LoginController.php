<?php

namespace Adso\controllers;

use Adso\Libs\controller;

class LoginController extends Controller
{
    protected $model;

    function __construct()
    {
    }

    function index()
    {
        $data = [
            "titulo" => "Login",
            "subtitulo" => "Formulario login"
        ];

        $this->view('login', $data, 'auth');
    }

    function validate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errorres = array();
            $user       = $_POST['user'] ?? '';
            $password   = $_POST['password'] ?? '';

            if ($user == "") {
                $errorres['user_error'] =  "El usuario es requerido";

                
            }
            if ($password == "") {
                $errorres['password_error'] =  "La contraseña es requerida";
            }
            if (empty($errorres)) {
                return;
                // Validar el login
            } else {
                $data = [
                    "titulo" => "Login",
                    "subtitulo" => "Formulario login",
                    "errors" => $errorres
                ];
                $this->view('login', $data, 'auth');
            }
        } else {
            die("!Te piye, ingreso no permitido¡");
        }
    }

    function forgetpassword()
    {
        $data = [
            "titulo" => "Recuperar contraseña",
            "subtitulo" => "Formulario recuperar contraseña"
        ];

        $this->view('forget', $data, 'auth');
    }
}
