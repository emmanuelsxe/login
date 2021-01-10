<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login con Php y MySQL</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>

    
        <form action="consulta.php" method="post">
        <label> Usuario: </label>
        <br>
        <input type="text" name="user" required>
        <br> <br>

        <label> Contraseña: </label>
        <br>
        <input type="password" name="contrasena" id="pass" minlength="6" required>
        <br> <br> 

        <input type="submit" value="Iniciar Sesión">
        <br><br><br>

        <a href="formularioRegistro.php">Registrate Aquí</a>

        </form>        
    
    
</body>
</html>