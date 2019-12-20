<?php 
session_start();
require 'admin/config.php';
require 'functions.php';

if(isset($_SESSION['admin'])){
    header('Location: ./admin');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['username']);
    $password = limpiarDatos($_POST['password']);

    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']){
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location: ' . RUTA . '/admin');
    }else{
        $errores .= '<li>Datos Incorrectos</li>';
    }
}

require 'views/login_view.php';

?>