<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index para subir fotos</title>
</head>
<body>
    <h1>Bienvenido Emprendedor</h1>
<center><br><form action="proceso_guardar.php" method="POST" enctype="multipart/form-data"><br><br>
<label>Ingresa el nombre de tu emprendimiento</label>
<input type="text" name="nombre" required placeholder="Ingresa el nombre" value=""/><br><br>
<label>Ingresa una pequeña descripcion</label><br><br>
<textarea name="descripcion" rows="10" cols="20" required placeholder="Ingresa desripcion" value="" require></textarea>
<br><br>
<label>Sube el logo de tu emprendimiento</label>
<input type="file" name="Imagen" require/><br><br>
<input type="submit" value="Aceptar">
</form></center>
    
</body>
</html>