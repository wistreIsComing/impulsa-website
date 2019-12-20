<?php


require 'config.php';

require '../functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}

// // $post_uno = $conexion->lastInsertId();
// $sliders = obtenerProductos(3, $conexion);
$posts = obtenerProductostotal(500, $conexion);

require 'views/posts.view.php';

?>