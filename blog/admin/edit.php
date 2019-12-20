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
    $titulo = limpiarDatos($_POST['titulo']);
    $video = limpiarDatos($_POST['video']);
    $texto = $_POST['texto'];
    $extracto = $_POST['extracto'];
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
        'UPDATE post SET 
        blog_title = :tittle, 
        blog_extracto = :extracto, 
        blog_video  = :video, 
        blog_texto = :texto, 
        blog_thumb = :thumb 
        WHERE blog_id = :id'
    );

    $statement->execute(array(
        ':tittle' => $titulo,
        ':texto' => $texto,
        ':video' => $video,
        ':extracto' => $extracto,
        ':thumb' => $thumb,
        ':id' => $id
    ));

    header('Location: ' . RUTA . '/admin/posts.php');

} else {
    $id_articulo = id_articulo($_GET['id']);

    if (empty($id_articulo)) {
        # code...
        header('Location: ' . RUTA . '/admin');
    }

    $post = obtener_post_por_id($conexion, $id_articulo);

    if (!$post) {
        # code...
        header('Location: ' . RUTA . '/admin');
    }

    $post = $post[0];
    
}

require 'views/edit_post.view.php';

?>