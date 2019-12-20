<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


comprobarSesion();


// comprobarSesion();

if(!$conexion){
    echo "No conectado";
}

// // $post_uno = $conexion->lastInsertId();
// $sliders = obtenerProductos(3, $conexion);
// $posts = obtenerProductos(6, $conexion);

require 'views/index.view.php';

?>