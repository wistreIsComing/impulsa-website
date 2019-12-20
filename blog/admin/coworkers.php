<?php


require 'config.php';

require '../functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}

$users = obtenerCoworkers(50, $conexion);

require 'views/coworkers_view.php';

?>