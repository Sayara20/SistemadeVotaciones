<?php 
include("conexion.php");

$id=$_REQUEST['id'];
$nombre = $_POST['nombre'];
$descripcion=$_POST['descripcion'];
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$query="UPDATE imagenes SET nombre='$nombre',descripcion='$descripcion',logo='$Imagen' WHERE id='$id'";
$resultado=$conexion->query($query);

if($resultado){
    //echo "si se modifico";
header("Location:mostrar.php");

}else
echo "no se inserto";

?>