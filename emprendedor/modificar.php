<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>

<?php

include("conexion.php");

$id=$_REQUEST['id'];

$query="SELECT * FROM imagenes WHERE id ='$id'";
$result=$conexion->query($query);
$row=$result->fetch_assoc();
    ?>




<center><br>
<form action="proceso_Modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data"><br><br>
<input type="text" name="nombre" required placeholder="nombre" value="<?php echo $row['nombre'];?>"/><br><br>
<label>Ingresa una pequeña descripcion</label><br><br>
<textarea name="descripcion" rows="10" cols="20" required placeholder="Ingresa desripcion" value="" require <?php echo $row['descripcion'];?>></textarea>
<br><br>
<img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['logo']); ?>"/></td>
<input type="file" name="Imagen" require/><br><br>
<input type="submit" value="Aceptar">
</form></center>


    
    
</body>
</html>