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
    $titulo = limpiarDatos($_POST['titulo']);
    $video = limpiarDatos($_POST['video']);
    $texto = $_POST['texto'];
    $extracto = $_POST['extracto'];
    $thumb = $_FILES['thumb']['tmp_name'];
    echo $titulo .' '. $video . ' '. $texto .' '. $texto .' '. $thumb;

    $arcchivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $arcchivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO post (blog_id, blog_title, blog_texto, blog_video, blog_extracto, blog_thumb)
    VALUES (null, :tittle, :texto, :video, :extracto, :thumb)'
    );

    $statement->execute(array(
        ':tittle' => $titulo,
        ':texto' => $texto,
        ':video' => $video,
        ':extracto' => $extracto,
        ':thumb' => $_FILES['thumb']['name']
    ));


    // header('Location: '. RUTA . '/admin');
}

require '../views/nuevo.view.php';

?>