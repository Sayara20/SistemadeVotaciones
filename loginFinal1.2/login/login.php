<?php
session_start();
if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['tipo']=="empresario") {
      header('Location:../contenido.view.php');
  }elseif ($_SESSION['user']['tipo']=="emprendedor") {
    header('Location:../emprendedor.view.php');
  }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Login</title>
</head>
<body>
<div class="login">
    <h1>Inicio de Sesión</h1>

<form action="" id="formlg">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="usuariolg"  patern = "[a-z0-9_-@] {1-15} " id="exampleInputEmail1" aria-describedby="emailHelp"  requiere placeholder="Email">
   
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control"  name="passlg" require patern = "{1-15}"id="exampleInputPassword1" requiere placeholder="Contraseña">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Inciar sesion</button>
</form>
<br>
<br>
<p>
			¿Aun no tienes cuenta, Registrate? <br>
			<a href="../registro/registrate.php">Registrate</a>
		</p>

</div>

    </div>




    <script src="js/jquery-3.5.1.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>