<?php
if(!isset($_SESSION)){
    session_start();
    $rol = $_SESSION['nombre_rol'];
    $usuario = $_SESSION['usuario'];
    if(empty($rol) && !isset($rol)){
        header("Location: ./login.php");
    }
}
?>