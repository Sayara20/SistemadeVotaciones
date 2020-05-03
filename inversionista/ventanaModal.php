<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ventanaModal.css">
</head>
<body>
    
<?php include("../conexion.php"); ?>


<div class="bg-modal">
    <div class="modal-contents">
        <div  class=" closeModal" onclick="closeModal();">+</div>
        <img  height="50px" class="icono_logo"  alt="">
        <p class="nameProducto" name="nameProducto" id="nameProducto"></p>         
        <h6 >Ingresa la cantidad a Invertir</h6>
        
        <form action="" method="POST" enctype="multipart/form-data">
        
            <input type="number" name="cantidad" id="Cantidad" required placeholder=" $$-Cantidad a invertir">
            <input type="hidden" name="producto_id" id="producto_id" required>
            
            <a href="#" class="buttonn" onclick="Votar()">Votar</a>
        </form>

    </div>
</div>

<script type="text/javascript"  src="ViewModal.js"></script>
    
</body>
</html>






    
