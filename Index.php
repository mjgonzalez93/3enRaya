<?php
/**
 * Created by PhpStorm.
 * User: Manuel Jesus Gonzalez
 * Date: 11/10/2016
 * Time: 14:04
 */

session_name('Partida');
session_start();


if (isset($_POST['reiniciar'])){

    session_destroy();

}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3 en Raya</title>
    <style>
        form{
            margin-top: 5%;
            margin-left: 40%;
            margin-right: 40%;
        }
        button{
            width: 70px;
            height: 50px;
        }

        .reinicio{

            width: 210px;
            height: 100px;

        }

    </style>
</head>
<body>
<h1>Turno del jugador: </h1>
<form method="post" action="index.php">

    <button type="submit" name="btn" value="1"></button>
    <button type="submit" name="btn" value="2"></button>
    <button type="submit" name="btn" value="3"></button>

    <br />

    <button type="submit" name="btn" value="4"></button>
    <button type="submit" name="btn" value="5"></button>
    <button type="submit" name="btn" value="6"></button>

    <br />

    <button type="submit" name="btn" value="7"></button>
    <button type="submit" name="btn" value="8"></button>
    <button type="submit" name="btn" value="9"></button>

    <br /> <br />

    <button type="submit" name="reiniciar" class="reinicio">Reiniciar partida</button>

</form>

</body>
</html>
