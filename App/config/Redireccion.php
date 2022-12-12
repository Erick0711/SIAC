<?php
namespace App\config;
trait Redireccion
{
    public function redirectVista($vista){
        $redirect =  "<script> window.location.href =  '../vista/{$vista}.php';</script>";
        return $redirect;
    } 
}
?>