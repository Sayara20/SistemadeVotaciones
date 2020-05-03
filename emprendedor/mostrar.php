<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar imagenes</title>
</head>
<body>
<center>
    <table border="2px">
        <thead>
            

            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th colspan="2">Operaciones</th>
            </tr>

            
        </thead>

        <tbody>
            <?php

            include("conexion.php");

           

            $query="SELECT * FROM imagenes";
            $result= $conexion->query($query);
            while($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['logo']); ?>"/></td>
                    <th><a href="modificar.php?id=<?php echo $row['id']; ?>">Editar</a></th>
                    <th><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                </tr>
                <?php
            }

            
            ?>

<tr>
            <th colspan="6" ><a href="index.php">Agregar Nuevo digimon</a></th>
            </tr>
        
        </tbody>
        
    </table>
</center>

    
</body>
</html>