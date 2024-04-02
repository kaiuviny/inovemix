<?php
// Desativar todos os relatórios de erros
//error_reporting(0);
// Relatar todos os erros, exceto E_WARNING

error_reporting(E_ALL & ~E_WARNING);


if(isset($_GET["Controller"])){
    
    include "../controller/".$_GET["Controller"]."Controller.php";

    echo "../controller/".$_GET["Controller"]."Controller.php <br />";

    $class = $_GET["Controller"]."Controller";

    eval("\$Controller = new $class();");

    if(isset($_GET["Action"])){
        
        $action = $_GET["Action"];

        eval("\$Controller->$action();");
        //eval("\$Controller->\$_GET['Action']();");
    }
    
}

?>