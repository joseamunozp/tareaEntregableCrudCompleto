<?php

// Función que se encarga de establecer la conexión con la BBDD
function connection(){

    // Se define la dirección del servidor con la BBDD(en nuestro caso, con el localhost y el puerto 3306)
    $host = "localhost:3306";
    // Se define el nombre del usuario apra conectarse a la BBDD, en nuestro caso el root
    $user = "root";
    // Se define la contraseña para conectarse a la BBDD(root tb)
    $pass = "root";
    //Nombre de nuestra BBDD
    $bd = "portfolio_projects";
    //Se establece la conexión con el servidor MySQL, usando mysqli_connect
    // mysqli_connect requiere host, usuario y contraseña.
    $connect=mysqli_connect($host, $user, $pass);
    //Seleccionamos la BBDD en la conexión 
    //mysqli_select_db selecciona la BBDD que se usará
    mysqli_select_db($connect, $bd);

    //Devuelve al conexión activa, que se utilizará para hacer las consultas SQL
    return $connect;
        

}


?>