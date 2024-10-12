<?php

include("connection.php");
$con = connection();

// Con esta sentencia SQL eliminamos el registro con el id dado
$id=$_GET["idAlumnos"];

$sql="DELETE FROM alumnos WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);

// Comprobamos si la consulta es correcta
if($query){
    Header("Location: ../index.php");
}else{

    echo "Error al eliminar el alumno" . mysqli_error($con);
}

?>