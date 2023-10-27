<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    echo'
      <script>
        alert("Por favor debes Iniciar Sesión");
        window.location="../index.php";
      </script>
    ';
    session_destroy();
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../assets/css/BienvenidaUsuario.css">
    <link rel="icon" href="../assets/images/ima.png">
  </head>
  <body>
    <div class="contenido">
      <div class="div">
        <div class="mateados"> <b><i>MATEADOS</i></b></div>
        <div class="acerca"><a href="" >Acerca de</a></div>
        <div class="donacion"><a href="https://www.paypal.com/paypalme/xaavi01?country.x=PE&locale.x=es_XC" target="_BLANK">Donacion</a></div>
        <div class="redes"><a href="" >Redes</a></div>
        <div class="botones">
          <div class="grados">
            <a href="../html/Grados.html"><p>Grados</p></a>
          </div>
        </div>
        <div class="cuenta">
          <a href="cerrar_sesion.php"><p>Cerrar</p></a>
        </div>
        <div class="imagen">
          <img class="img" src="../assets/images/ima.png" />
        </div>
        <div class="bienvenido">Bienvenido</div>
        <p class="gracias-por-elegir">
          <span class="span"
            >Gracias por elegir este sitio web para reforzar tus conocimientos en el área de matemática básica.<br /><br />Dirigase
            al boton
          </span>
          <span class="negrita">Grados</span>
          <span class="span"> para poder comenzar con su reforzamiento matemático.</span>
        </p>
        <div class="user"></div>
      </div>
    </div>
  </body>
</html>
