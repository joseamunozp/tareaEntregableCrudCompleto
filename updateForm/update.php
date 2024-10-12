<?php
include("../CRUD/connection.php"); // incluimos el archivo de conexión a al BBDD
$con = connection(); // Establecemos la conexión con la BBDD

// Obtiene el Id del alumno a través del método GET, desde la URL
$id = $_GET['idAlumnos'];

//Hacemos la sentencia SQL para seleccionar los datos del amumno por el id
$sql = "SELECT * FROM alumnos WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);

// Comprobamos si la consulta SQL se ejecutó correctamente
if ($query) {
    // Si fue correcto, obtenemos los datos en un array
    $row = mysqli_fetch_array($query);
} else {
    // Si hay un error, muestra un mensaje de error
    echo "Error al cargar los datos del alumno: " . mysqli_error($con);
}

    
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Este es un ejemplo crud">
    <meta name="keywords" content="html, css, bootstrap, js, portfolio, proyectos, php">
    <meta name="language" content="EN">
    <meta name="author" content="joaquin.borrego@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- My css -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
    <!-- My scripts -->
    <!-- <script type="text/javascript" src="js/app.js" defer></script> -->

    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>Edit Projects</title>

</head>

<body>
    <div class="container">
        <h1 class="text-center">Actualizar</h1>
        <form action="../CRUD/edit_project.php" method="POST">
        <div class="form-group">
                <input type="hidden" class="form-control" name="idAlumnos" value="<?= $row['idAlumnos']?>">
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="nombreAlumnos" placeholder="Nombre" value="<?= $row['nombreAlumnos']?>">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" value="<?= $row['edad']?>">
            </div>
            <input type="submit" class="m-3 btn btn-primary" value="Actualizar">
        </form>
    </div>
</body>
</html>