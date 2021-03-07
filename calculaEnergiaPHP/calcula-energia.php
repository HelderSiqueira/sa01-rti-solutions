<?php

    $nomeCliente = $_GET['nomeCompleto'];
    $enderecoCliente = $_GET['endereco'];
    $consumoCliente = $_GET['gastoEnergia'];

    $calculoKhwAcima = $consumoCliente * 0.42;
    $calculoKhwAbaixo = $consumoCliente * 0.32;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>Seneletro</title>
</head>
<body>
    <?php
        if($consumoCliente > 120){
    ?>  
        <h1>Conta de luz de <em><?= $nomeCliente ?>.</em></h1>
        <h1><?= $enderecoCliente ?>.</h1>
        <h1 style="color: red">Consumo: <em><?= $consumoCliente ?>kWh.</em></h1>
        <h1>Valor a pagar: R$ <em><?= number_format($calculoKhwAcima, 2, ",", ".") ?>.</em></h1> 
        
    <?php
        }else{
    ?> 
        <h1>Conta de luz de <em><?= $nomeCliente ?>.</em></h1>
        <h1><?= $enderecoCliente ?>.</h1>
        <h1 style="color: blue">Consumo: <em><?= $consumoCliente ?>kWh.</em></h1>
        <h1>Valor a pagar: R$ <em><?= number_format($calculoKhwAbaixo, 2, ",", ".") ?>.</em></h1>    
        <h1>Obrigado por economizar!</h1>
    <?php
        }
    ?>
</body>
</html>