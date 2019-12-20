<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

$id = limpiarDatos($_GET['id']);

if (!$id) {
    # code...
    header('Location: ' . RUTA . '/admin');
}

$show = 'mostrar';
$statement = $conexion->prepare('UPDATE post SET blog_show = :show WHERE blog_id = :id');
$statement->execute(array(
    ':show' => $show,
    ':id' => $id
));

header('Location: ' . RUTA . '/admin/posts.php');

require '../views/editar.view.php';

?>