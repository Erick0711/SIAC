<?php
namespace App\config;

trait Redireccion
{
    public  $rediccionarInicio = "<script> window.location.href =  '../vista/inicio.php';</script>",
            $redireccionarUsuario = "<script> window.location.href =  '../vista/usuario.php';</script>",
            $redireccionarLogin = "<script> window.location.href =  '../vista/login.php';</script>",
            $redireccionarGasto = "<script> window.location.href =  '../vista/gasto.php';</script>",
            $redireccionarRecinto = "<script> window.location.href =  '../vista/recinto.php';</script>",
            $redireccionarApartamento = "<script> window.location.href =  '../vista/apartamento.php';</script>",
            $redireccionarArticulo = "<script> window.location.href =  '../vista/articulo.php';</script>";
}
?>