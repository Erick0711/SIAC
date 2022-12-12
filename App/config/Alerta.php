<?php 
namespace App\config;
trait Alerta
{
        function mensaje($bgColor,$txtColor,$tipo,$contenido){
        $mensaje =   "<div class='alert alert-{$bgColor} text-{$txtColor} alert-dismissible fade show' role='alert'>
                                <strong>{$tipo}! </strong> {$contenido} <button type='button' class='close' 
                                data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span></button></div>";
        return $mensaje;
        }
}
?>