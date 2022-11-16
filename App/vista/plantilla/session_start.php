
    <?php
    session_start();
    $sesion = $_SESSION['nombre_rol'];
    if(!isset($sesion)){
    header("location: ./login.php");
    }
    ?>