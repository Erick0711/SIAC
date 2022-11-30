<?php
session_start();
$rol = $_SESSION['nombre_rol'];
if(empty($rol) && !isset($rol)){
    header("Location: ./login.php");
}
?>