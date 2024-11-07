<?php

require "funcao.php";

if(isset($_GET["idade"]) && !empty($_GET["idade"]) && 
    isset($_GET["genero"]) && !empty($_GET["genero"]) && 
    isset($_GET["reserva"]) && !empty($_GET["reserva"])){

        $idade = $_GET["idade"];
        $genero = $_GET["genero"];
        $reserva = $_GET["reserva"];

       echo ValidaObrigatoriedade($idade, $genero, $reserva);

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <input type="number" name="idade" placeholder="Informe sua idade">
        <select name="genero" id="genero">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <select name="reserva" id="reserva">
            <option value="naofeito"></option>
            <option value="feito">Tenho Reserva</option>
            <option value="naofeita">Não tenho Reserva</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>