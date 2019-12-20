<?php session_start();

require 'config.php';
require '../functions.php';

// comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = limpiarDatos($_POST['id']);
    $nombre = limpiarDatos($_POST['nombre']);
    $thumb = $_FILES['thumb'];
    $thumb_guardada = $_POST['thumb-guardada'];


    if (empty($thumb['name'])) {
        # code...
        $thumb = $thumb_guardada;
    } else {
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $conexion->prepare(
        'UPDATE pesonas SET 
        persona_nombre = :nombre, 
        persona_foto = :thumb 
        WHERE persona_id = :id'
    );

    $statement->execute(array(
        ':nombre' => $nombre,
        ':thumb' => $thumb,
        ':id' => $id
    ));

    header('Location: ' . RUTA . '/admin/coworkers.php');

} 

require 'views/edit_coworker.view.php';

?>