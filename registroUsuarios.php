<?php

#Credenciales para la conexión a la Base de Datos en Php My Admin
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LOGIN_PRACTICA";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');

    if (!$conn) {
        die("Conexión fallida, intente más tarde o contacte a Soporte Tecnico" . mysqli_connect_error());
    }

#Guardar información en la Base de Datos

$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$email = $_POST['email'];
$constrasena = $_POST['pass'];

$sql = "INSERT INTO usuarios (nombres, apellido_paterno, apellido_materno, correo_electronico, contrasena)
VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$email', '$contrasena')";

    if (mysqli_query($conn, $sql)) {
        echo "Usuario creado con &eacute;xito";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Nuevo</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


    <script>
        alert('Usuario nuevo creado con éxito!');
    </script>

    <a href="Index.php"> Volver al inicio </a>
</body>
</html>