<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversionista</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="carrucel5.css">
</head>

<body>
<?php include("../conexion.php"); ?>
   

    <h2>Bienvenido Inversionista</h2>
 <!-- hace el carrucel -->
    <div class="carousel" id="lista">
                <?php
                $query="SELECT * FROM imagenes";
                $result= $conexion->query($query);
                while($i=$result->fetch_assoc()){
                    ?>
                    <div class="carousel-item">
                    <p><?php echo $i['descripcion']; ?></p>
                        <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($i['logo']); ?>"/>
                        <a href="#" class="button add_Votacion" add_Voto="<?php echo $i['id']?>">Votar</a>
                    
                    </div>
                    <?php
                }
                ?>
    </div>

     <!-- hace la ventana modal -->
    <div>
    <?php require "ventanaModal.php";
    ?>
    </div>
        
         <!-- hace la tabla de los datos -->    
    <div >
        <h1>Resultados de votaciones de digimon</h1>
            <table  class="" id="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad invertidad</th>
                    <th id="tabla2">editar</th>
                    <th>Cantidad invertidad</th>

                </tr>
            </thead>

        </table>
    </div>


    
  

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    <script type="text/javascript"  src="ViewModal.js"></script>

</body>

</html>