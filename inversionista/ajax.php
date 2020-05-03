<?php
//print_r($_POST);
include "../conexion.php";

if (!empty($_POST)) {
    //extraer datos del digimon
    if ($_POST['action']=='infoDigimon') {
        //echo "Consultar digimon";
        $digimon_id=$_POST['add_Voto'];
        $query=mysqli_query($conexion,"SELECT nombre,descripcion,id FROM imagenes
                                    WHERE id=$digimon_id");
        mysqli_close($conexion);

        $result=mysqli_num_rows($query);
        if ($result>0) {
            $data=mysqli_fetch_assoc($query);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            exit;
        }
        echo 'error';
        exit;
    }
    
}
exit;  

?>

