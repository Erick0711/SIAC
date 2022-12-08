<?php
include("./plantilla/session_start.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <title>.:: SIAC ::.</title>
</head>
<body>
    <div class="container-lg bg-light vh-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-12 text-center">
            <h1>Bienvenido </h1>
            </div>
            <div class="col-md-12  text-center">
            <h2><?php echo $usuario;?></h2>
            </div>
            <div class="col-md-12  text-center mt-4">

            </div>
            <div class="col-md-4 text-center">
            <select name="" id="" class="custom-select badge-primary border-0">
                <option class="badge-info"><a href="">Persona</a></option>
                <option class=""><a href="" class="btn btn-sucess">Persona</a></option>
            </select>
            </div>
            <div class="col-md-4 text-center">
            <select name="" id="" class="custom-select badge-primary border-0">
                <option class="badge-primary"><a href="">Persona</a></option>
                <option class=""><a href="" class="btn btn-sucess">Persona</a></option>
            </select>
            </div>
            <div class="col-md-4 text-center">
            <select name="" id="" class="custom-select badge-primary border-0">
                <option class="badge-primary"><a href="">Persona</a></option>
                <option class=""><a href="" class="btn btn-sucess">Persona</a></option>
            </select>
            </div>
        </div>
    </div>
</body>
</html>

