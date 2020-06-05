<?php
$mysqli = new mysqli ('localhost','root','','login');
if ($mysqli->connect_error) {
    echo "Error al conectarse con mySQL debido al error ".$mysqli->connect_error;
}else
    echo"conexion exitosa"
?>