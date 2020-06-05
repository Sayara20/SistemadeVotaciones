<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/registro.css">
</head>
<body>
	<div class="container">
		<h1 class="titulo">Registrate</h1>

		<form  method="POST" class="formulario" name="formulario">
			
		<div class="form-group">
			<label for="exampleInputEmail1">Nombre del Negocio </label>
		    <input type="text" name="empresa" class="empresa form-control" placeholder="Negocio"  id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			
			<div class="form-group">
			<label for="exampleInputEmai2">Email </label>
		    <input type="text" name="usuario" class="usuario form-control" placeholder="Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>

			<div class="form-group">
			<label for="exampleInputPassword1">Contraseña</label>
				<input type="password" name="password" class="password form-control" placeholder="Contraseña" id="exampleInputPassword1">
			</div>

			<div class="form-group">
			<label for="exampleInputPassword2">Confirmar Contraseña</label>
				<input type="password" name="password2" class="password_btn form-control" placeholder="Confirmar Contraseña"id="exampleInputPassword1">
				
				
				<label for="exampleInputEmail3"> Escoge una opcion</label><input list="tipo" name="tipo">
	           <datalist id="tipo">
		          <option value="Empresario"></option>
		          <option value="Emprendedor"></option>
			</datalist><br/><br/>
			</div>
			<div class="dropdown show">
  
                 </div>
                
				
				 <button type="submit" name="register"class="btn btn-primary">Registrate</button>

				 <br>
				 <br>
				 <p>
			¿Ya tienes cuenta? <br>
			<a href="../login/login.php">Iniciar Sesión</a>
		</p>
        </div>



   <br>

			
       
<!--Mensaje de error -->
			<?php if(!empty($errores)): ?>
				<div>
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		
	</div>



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
</body>
</html>