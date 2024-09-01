<?php
namespace APP\model;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Usuario{
    private $usuário;
    private $senha;

    function __construct ($usuário, $senha){
        $usuário = $_POST['usuário'];
        $senha = $_POST['senha'];
    }
}