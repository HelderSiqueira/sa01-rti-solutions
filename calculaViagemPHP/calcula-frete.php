<?php

$cidadeDeOrigem = $_GET['cidadeOrigem'];
$cidadeDeDestino = $_GET['cidadeDestino'];
$distancia = $_GET ['distancia'];
$pedagio = $_GET ['pedagio'];

$calculoDistancia = $distancia * 6.00;
$calculoPedagio = $pedagio * 9.40;

$calculoTotal = $calculoDistancia + $calculoPedagio;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='styles-global.css'/>
    <title>sa01-rti-solutions</title>
</head>
<body>
    <?php
        if($calculoPedagio > 100){
    ?>
        <h1 style="color: red"> O valor total dos pedágios é de R$ <?= number_format($calculoPedagio, 2, ",", ".") ?></h1>
    <?php
        }else{
    ?>
        <h1>O valor total dos pedágios é de R$ <?= number_format($calculoPedagio, 2, ",", ".") ?></h1>
    <?php
        }
    ?>
    <h1>A viagem de <?= $cidadeDeOrigem ?> á <?= $cidadeDeDestino ?> irá custar o valor total de R$ <em><?= number_format($calculoTotal, 2, ",", ".") ?></em></h1>
</body>
</html>
