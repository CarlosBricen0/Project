<html>

<head>
<link rel="icon" type="image/jpg" href="https://www.pngarts.com/files/3/Logo-PNG-Download-Image.png" height="45px"width="45px">
		
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="Presentacion/Estilos/css/LoginEstilo.css" rel="stylesheet" >
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
      <img src="https://www.pngarts.com/files/3/Logo-PNG-Download-Image.png" id="icon" alt="User Icon" />
      <h1>REPI TELRAMO ELECTRONICS LTDA.</h1>
    </div>

    <!-- login principal-->
    <form method="post" action="Controladores/ValidadorLogin.php" >
      <input type="text" id="login" class="fadeIn second" required name="TxtUsuario" placeholder="nombre de usuario">
      <input type="password" id="password" class="fadeIn third" required name="Txtpass" placeholder="contraseña">
      <input type="submit" class="fadeIn fourth" name ="btn"value="Log In">
    </form>

  </div>
</div>

</body>
</html>

