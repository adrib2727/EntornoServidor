<?php
    session_start();
    $_SESSION["indiceSesion"] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas mayores de edad</title>
</head>
<body>
    <form action="sesion2.php" method="post">
        Introduce un nombre:
        <input type="text" name="nombre" placeholder="Escribe un nombre">
        <input type="text" name="edad" placeholder="Escribe la edad">
        <input type="submit" value="Enviar nombre">
    </form>
</body>
</html>