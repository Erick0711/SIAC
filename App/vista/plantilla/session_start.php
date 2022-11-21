<?php
session_start();
$rol = $_SESSION['nombre_rol'];
if(!isset($rol)){
    header("location: ./login.php");
}
?>