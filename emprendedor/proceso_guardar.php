<?php 
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion=$_POST['descripcion'];
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$query="INSERT INTO imagenes(nombre,descripcion,logo) VALUES ('$nombre','$descripcion','$Imagen')";
$resultado=$conexion->query($query);

if($resultado){
   header("Location:mostrar.php");

}else
echo "no se inserto";

?>