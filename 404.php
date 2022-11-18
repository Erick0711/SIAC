<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404</title>
</head>
<style>
  body {
    font-family: 'Rubik', sans-serif;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    margin: 0px;
    padding: 0px;
  }

  .error_container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .error_block {
    width: 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    gap: 10px;
  }

  .error_block h1 {
    font-size: 80px;
    color: #3f3a64;
  }

  .error_block h3 {
    font-size: 40px;
    color: #3f3a64;
  }
.btn{
  margin-top: 25px;
}
  .error_btn {
    background: #20ad96;
    border: #20ad96;
    color: #fff;
    text-decoration: none;
    padding: 10px;
    border-radius: 5px;
    width: 25px;
    transition: 0.5s all;
  }
  .error_btn:hover{
    background: #20ad50;
    border: #20ad90;
    box-shadow: 1px 8px 8px 2px rgba(0, 80, 0, 0.2); 
    }
</style>

<body>
  <div class="error_container">
    <div class="error_block">
      <h1>404</h1>
      <h3>Oops... Pagina no encontrada!</h3>
      <p>Es posible que haya escrito mal la dirección o que la página se haya movido.</p>
      <div class="btn">
      <a href="http://localhost/SIAC/App/vista/inicio.php" class="error_btn">Volver al inicio</a>
      </div>
    </div>
  </div>
</body>

</html>