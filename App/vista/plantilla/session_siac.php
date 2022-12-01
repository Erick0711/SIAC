<?php
if(empty($rol) && !isset($rol)){
    header("Location: ./login.php");
}elseif($rol == "Administrador"){
    header("Location: ./plantilla/session_destroy.php");
}
?>