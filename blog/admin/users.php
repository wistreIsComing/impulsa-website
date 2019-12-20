<?php


require 'config.php';

require '../functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}

$users = obtenerUsers(50, $conexion);

require 'views/users_view.php';

?>