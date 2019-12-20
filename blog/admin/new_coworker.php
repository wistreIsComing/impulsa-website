<?php 

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


// comprobarSesion();


if(!$conexion){
   echo 'erroooor';
   die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = limpiarDatos($_POST['nombre']);
    $thumb = $_FILES['thumb']['tmp_name'];

    $arcchivo_subido = '../' . $blog_config['carpeta_persona'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $arcchivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO personas (persona_id, persona_nombre, persona_foto)
    VALUES (null, :nombre, :thumb)'
    );

    $statement->execute(array(
        ':nombre' => $nombre,
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: ' . RUTA . '/admin/coworkers.php');
}

require 'views/new_coworkers.view.php';

?>