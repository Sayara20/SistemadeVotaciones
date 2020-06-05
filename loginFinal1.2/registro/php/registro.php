<?php 



if (isset($_POST['register'])) {
	$empresa = filter_var(($_POST['empresa']), FILTER_SANITIZE_STRING);
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$tipo = filter_var(strtolower($_POST['tipo']), FILTER_SANITIZE_STRING);

	$errores = '';

	if (empty($empresa) or empty($usuario) or empty($password) or empty($password2) or empty($tipo)) {
		$errores .= '<li>Por favor rellena todos los datos</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
		} catch (PDOExeption $e) {
			echo "Error: " . $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();




		
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}
		//HASS DE LA CONTRASEñA (encriptar)
		//$password = hash('sha512', $password);
		//$password2 = hash('sha512', $password2);

		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (id, empresa ,usuario, pass,tipo) VALUES (null, :empresa,:usuario, :pass,:tipo)');
		$statement->execute(array(':empresa'=>$empresa,':usuario' => $usuario, ':pass' => $password ,':tipo'=>$tipo));

		
	}
}
require '../registrate.php'

?>


