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

$statement = $conexion->prepare('DELETE FROM personas WHERE persona_id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . '/admin/coworkers.php');

require '../views/editar.view.php';

?>