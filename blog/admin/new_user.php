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
    $user = limpiarDatos($_POST['user']);
    $nombre = limpiarDatos($_POST['nombre']);
    $clave = $_POST['clave'];
    $claveDos = $_POST['clave_con'];
    $thumb = $_FILES['thumb']['tmp_name'];
    $errores = '';

    if (empty($user) or empty($clave) or empty($nombre) or empty($claveDos)) {
        # code...
        $errores .= '<li>Por favor rellenar todos los campos</li>';
    } else {

        $statement = $conexion->prepare(
            'SELECT * FROM users WHERE user_user = :usuario LIMIT 1'
        );
        $statement->execute(array(':usuario' => $user));
        $resultado = $statement->fetch();

        if($resultado != false){
            $errores .= '<li>El usuario ya existe</li>';
        }

        #hasheando clave o  encriptando
        $password = hash('sha512', $clave);
        $password2 = hash('sha512', $claveDos);

        if($clave != $claveDos){
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }
    }

    if($errores == '') {

        $arcchivo_subido = '../' . $blog_config['carpeta_perfil'] . $_FILES['thumb']['name'];

        move_uploaded_file($thumb, $arcchivo_subido);

        $statement = $conexion->prepare(
        'INSERT INTO users (user_id, user_user, user_name, user_pass, user_confirmation, user_thumb)
        VALUES (null, :user, :name, :pass, :confirmation, :thumb)'
        );

        $statement->execute(array(
            ':user' => $user,
            ':name' => $nombre,
            ':pass' => $clave,
            ':confirmation' => $claveDos,
            ':thumb' => $_FILES['thumb']['name']
        ));


        header('Location: ' . RUTA . '/admin/users.php');

    }

    
}

require 'views/new_user.view.php';
