<?php

include("connection.php");// Incluimos el archivo de onexión a la BBDD
$con = connection(); // Establece la conexión con la BBDD

// Obtenemos los datos del formulario enviados por el método POST
$id=0; //El campo id es 0, ya que se supone que será autoincremental en la BBDD
$name = $_POST['nombreAlumnos']; //Obtenemos el nombre del alumno enviado en el formulario
$edad = $_POST['edad']; // Obtenemos la edad del alumno enviada al formulario

// Con esta sentencia SQL, insertamos un nuevo registro en la tabla "alumnos"
$sql = "INSERT INTO alumnos VALUES('$id','$name','$edad')";
$query = mysqli_query($con, $sql); // Ejecutamos la consulta

// Comprobamos si la consulta es correcta
if($query){
//Si se insertó correctamente, te manda al index
    Header("Location: ../index.php");
}else{
//Si tenemos un error, muestra un mensaje 

}

?>