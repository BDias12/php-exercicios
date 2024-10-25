<?php

if(isset($_GET["nome"]) && !empty($_GET["nome"])
    && isset($_GET["nota1"]) && !empty($_GET["nota1"])
    && isset($_GET["nota2"]) && !empty($_GET["nota2"])
    && isset($_GET["nota3"]) && !empty($_GET["nota3"])){

        
        
        $nome = $_GET["nome"];
        $notas = array((float)$_GET["nota1"], (float)$_GET["nota2"], (float)$_GET["nota3"]);

        $media = array_sum($notas)/3;

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
    <p>Aluno <?=$nome?>, media: <?=$media?></p>
</body>
</html>