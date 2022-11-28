<?php 
namespace App\config;
trait Alerta
{
    public  $alerta_fallo = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Alerta!</strong> Algo sucedio en el registro vuelve a intentarlo.
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span></button></div>",

            $alerta_advertencia = "<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>
                                    ¡Alerta!</strong> Completa todos los campos correctamente!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span></button></div>",

            $alerta_validacion = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                                    <strong>¡Alerta!</strong> Completa cada campo correctamente!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span></button></div>",
            
            $alerta_igualdad =     "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>¡Alerta!</strong> Dato existente dentro del sistema.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span></button></div>";
}

?>