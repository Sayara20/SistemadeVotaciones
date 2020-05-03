<?php 
include("conexion.php");

$id=$_REQUEST['id'];

$query="DELETE from imagenes WHERE id='$id'";
$resultado=$conexion->query($query);

if($resultado){
   // echo "si seelimno";
header("Location:mostrar.php");

}else
echo "no se inserto";

?>