<?php

    $moedaConvertida = $_GET['tipoMoeda'];
    $quantidadeConvertida = $_GET['quantidadeReais'];

    $conversaoDolar = $quantidadeConvertida / 5.41;
    $conversaoEuro = $quantidadeConvertida / 6.57;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XD Investimentos</title>
</head>
<body>
    <?php
        if($moedaConvertida == "dolar"){
    ?>
        <h1>Valor total em dólar: $<?= number_format($conversaoDolar, 2, ",", ".") ?></h1>
    <?php    
        }else{
    ?>
        <h1>Valor total em euro: €<?= number_format($conversaoEuro, 2, ",", ".") ?></h1>  
    <?php           
        }
    ?>      
</body>
</html>