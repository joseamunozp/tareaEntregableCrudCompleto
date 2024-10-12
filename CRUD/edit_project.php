<?php

include("connection.php"); // Incluimos el archivo para establecer la conexion con la BBDD.
$con = connection(); // LLama a la función connection() para crear la conexión con la BBDD.

// Obtenemos los valores del formulario(tipo POST) enviados por el usuario
$id=$_POST["idAlumnos"];
$name = $_POST['nombreAlumnos'];
$edad = $_POST['edad'];

// Con esta sentencia SQL actualizamos los datos del alumno en la tabla "Alumnos"
$sql="UPDATE alumnos SET nombreAlumnos='$name', edad='$edad' WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);

// Comprobamos si la consulta es correcta
if($query){
// Si la consulta es correcta, envía al usuario al index    
    Header("Location: ../index.php");
}else{
// Si hubiese un error, lo indicamos con un mensaje de error
    echo "Error al actualizar el alumno" . mysqli_error($con);
}

?>