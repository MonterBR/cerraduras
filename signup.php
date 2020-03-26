<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Se a creado su nuevo usuario correctamente';
    } else {
      $message = 'Lo sentimos no puede crear un usuario verifique sus datos por favor';
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
    <title>Signup | Beuty Eliss</title>
    <header class="header">
    <div class="container logo-nav-container">
        <a href="index.php" class="logo">Beauty Eliss</a>
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
        <div class="toggle">
         <a href="login.php"><span>Acceder</span></a>
        </div>
            <?php if(!empty($message)): ?>
      <p> <?= $message ?><br><br></p>
    <?php endif; ?>
<div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="signup.php" method="post" class="form">
                <input type="text" placeholder="Ingresa tu correo" required name="email">
                
                <input type="password" placeholder="Contraseña" required name="password">
                
                <input type="password" placeholder="Confirmar contraseña" required name="confirm_password">
                
                
                <input type="submit" value="Registrarse">

         <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>


</div>
</div>

  <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>

</html>