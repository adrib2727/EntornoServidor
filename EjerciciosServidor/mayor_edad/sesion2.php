<?php
    require "clases/clase_edad.php";

    session_start();
    $is = $_SESSION["indiceSesion"]; //Indice del array sesión.

    if(!empty($_POST["nombre"]))
    {
        $nom = new Nombres($_POST["nombre"], $_POST["edad"]);
        $_SESSION["nombre".$is] = $nom;
        $is++;
        $_SESSION["indiceSesion"] = $is;
    }

    if($_POST["nombre"] == "terminar"){
        header("Location:sesion3.php");
    }
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