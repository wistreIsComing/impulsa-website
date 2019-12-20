<?php

if (empty($_SESSION["language"])) {

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION["language"]=$lang;
    if ($lang!="es")
    {
     $_SESSION["language"]="en";   
    }
}
if (isset($_SESSION["language"]))
    
{
$lang=$_SESSION["language"]; 
}
switch ($lang){
    case "es":
        //echo "paginas ES";
        include("language/es.php");
        break;
    case "en":
        //echo "paginas EN";
        include("language/en.php");
        break;        
    default:
        //echo "paginas EN - por defecto";
        include("language/en.php");//para todo aquello que no este en es ni en en
        break;
}



?>