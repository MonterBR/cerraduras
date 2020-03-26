<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<STYLE>A {text-decoration: none;} </STYLE>
<STYLE>A {color: white;} </STYLE>
<!-- aqui se agregan los estilos -->
<link rel="stylesheet" href="css/estilored.css">
<link rel="stylesheet" href="fuentes/style.css">
<link rel="stylesheet" href="css/estilobienvenida.css">
<link rel="shortcut icon" href="imagenes/icono.png">
<link rel="stylesheet" href="css/estilosformulario.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141800747-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141800747-1');
</script>

</head>
<body>
<div class="responsive">
<div class="social">
    <ul>
        <li><a href="http://www.facebook.com/tanunicacomotu" target="_blank" class="icon-facebook2"></a></li>
        <li><a href="http://www.instagram.com/beautyelisss" target="_blank" class="icon-instagram"></a></li>
        <li><a href="https://mail.google.com/mail/u/0/?tab=wm#inbox" class="icon-mail2"></a></li>    
    </ul>
</div> 
<div id="contenedor">
    <title>Registro | Beuty Eliss</title>
    <header class="header">
    <div class="container logo-nav-container">
        <a href="index.html" class="logo">Beauty Eliss</a>
        <span class="menu-icon">Menú</span>
        <nav class="menu">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="somos.html">¿Quiénes somos?</a></li>
                <li><a href="productos.html">Productos</a></li>
                <li><a href="ubicacion.html">Ubicación</a></li>
            </ul>
        </nav>
    </div>
</header>


 <div class="contenedor-form">
        <?php if(!empty($user)): ?>

      <br> Felicidades, el correo <?= $user['email']; ?>
      <br>Se acaba de registar en nuestro servidor
      <br>Por ello tienes acceso a una lista de Precios
      <br>Y un catálago de todos nuestros productos
      <br>Si los deseas descargar solo da click sobre ellos
      <br>
      <br>
      <a href="catalogo.pdf"><br>Cátalogo</a> 
      <br>
      <a href="precios2019.pdf"><br>Lista de Precios</a>
      <br> 
      <a href="logout.php"><br>Cerrar Sesión</a>
    <?php else: ?>
        <div class="">
           
        </div>
        
        <div class="formulario">
          <a href="login.php">  <h2>Iniciar Sesión</h2></a>
          <a href="signup.php">  <h2>Crea tu Cuenta</h2></a>
          
        </div>
        
       
        <?php endif; ?>
    </div>
    
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>

<footer class="footer">
  <div class="container">
    <p>Direccion: Bazar Pericoapa local #61 pasillo C
    Jueves - Sabado en un horario de 2:00 - 7:00 pm
    Contacto: 5552873680 / 5564435537</p>
  </div>  
</footer>
</div>
</div>

  <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>