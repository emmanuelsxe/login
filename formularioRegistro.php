<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro de Usuario Nuevo</title>
</head>

<body>
    <h1>Bienvenido</h1>
    <br>
    <p>Llena los datos del formulario para registrarte</p>

    <form action="registroUsuarios.php" method="post">
        <label> Nombre(s) </label>
        <br>
        <input type="text" name="nombre" required>
        <br> <br>

        <label> Apellido Paterno </label>
        <br>
        <input type="text" name="apellidoPaterno" required>
        <br> <br>

        <label> Apellido Materno </label>
        <br>
        <input type="text" name="apellidoMaterno">
        <br> <br>

        <label> Correo Electronico </label>
        <br>
        <input type="email" name="email" required>
        <br><br>

        <label> Contraseña </label>
        <br>
        <input type="password" name="pass" minlength="6" required>
        <br><br>


        <input type="submit" value="Registar">

    </form>


    <br>
    <a href="Index.php">Regresar al inicio</a>
</body>

</html>