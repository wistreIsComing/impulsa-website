<?php

define('RUTA', 'http://localhost/Impulsa-multidioma/blog');
define('RUTAADMIN', 'http://localhost/Impulsa-multidioma/blog/admin');
$bd_config = array(
    'basededatos' => 'blog_impulsa',
    'usuario' => 'root',
    'pass' => ''
);

$blog_config = array(
    'post_por_pagina' => '6',
    'carpeta_imagenes' => 'src/post/',
    'carpeta_perfil' => 'src/profile/',
    'carpeta_persona' => 'src/personas/'
);

$blog_admin = array(
    'usuario' => 'impulsa',
    'password' => 'aja',
);

?>