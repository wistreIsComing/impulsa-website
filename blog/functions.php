<?php

function conexion($bd_config){
    try {
        //code...
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basededatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    }
    catch(PDOException $e) {
        echo "Mensaje: " . $e->getMessage() . " ";
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtenerPostUno($blog_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $blog_config - $blog_config : 0;
    
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM post WHERE blog_show = 'mostrar' ORDER BY blog_id DESC LIMIT $inicio, 1");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerProductos($blog_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $blog_config - $blog_config : 0;
    // $inicio = $inicio+1;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM post WHERE blog_show = 'mostrar' ORDER BY blog_id DESC LIMIT $inicio, $blog_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerProductostotal($blog_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $blog_config - $blog_config : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM post ORDER BY blog_id DESC LIMIT $inicio, $blog_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerUsers($blog_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $blog_config - $blog_config : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM users ORDER BY user_id DESC LIMIT $inicio, $blog_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerCoworkers($blog_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $blog_config - $blog_config : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM personas ORDER BY persona_id DESC LIMIT $inicio, $blog_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}


function obtenerSliders($blog_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $blog_config - $blog_config : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM slider ORDER BY id DESC LIMIT $inicio, $blog_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerProductosPorCat($blog_config, $conexion, $cat){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $blog_config - $blog_config : 0;
    $sentencia = $conexion->prepare("SELECT * FROM products WHERE product_cat = '$cat' LIMIT $inicio, $blog_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function id_articulo($id){
    return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM post WHERE blog_id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dia de " . $meses[$mes] . " del $year";
    return $fecha;

}

function numero_paginas($post_por_pagina, $conexion){
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;
}

function comprobarSesion(){
    if(!isset($_SESSION['admin'])){
        header('Location: ' . RUTA);
    }
}

?>