<?php
error_reporting(E_ALL & ~E_WARNING);

if(isset($_GET["Controller"])){
    
    include "controller/".$_GET["Controller"]."/".$_GET["Controller"]."Controller.php";
    //echo "controller/".$_GET["Controller"]."/".$_GET["Controller"]."Controller.php";

    
    $class = $_GET["Controller"]."Controller";

    eval("\$Controller = new $class();");
    
    if(isset($_GET["Action"])){
            $action = $_GET["Action"];
            eval("\$Controller->$action();");
            //eval("\$Controller->\$_GET['Action']();");
    }
    
}
else {
    session_destroy();
    $_SESSION["msg"] = "";
    $_SESSION["data"] = "";
    include("index.html");
}

?>