<?php
require '../conexion.php';
session_start();







$usuarios = $mysqli->query("SELECT empresa, tipo FROM usuarios
WHERE usuario = '".$_POST['usuariolg']."'AND pass = '".$_POST['passlg']."' ");

if ($usuarios -> num_rows == 1) {
    $datos = $usuarios->fetch_assoc();
    $_SESSION['user']=$datos;
    echo json_encode(array('error'=> false, 'tipoUser'=> $datos['tipo']));
}else{
echo json_encode(array('error'=> true));
}





$mysqli->close();

?>