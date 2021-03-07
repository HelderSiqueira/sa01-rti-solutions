<?php

    $nome = $_GET['nomeFuncionario'];
    $salario = $_GET['salarioRecebido'];
    
    $calculaSalarioMaior = $salario * 0.1;
    $calculaSalarioMenor = $salario * 0.2;

    $calculaAumentoDoMaiorSalario = $salario + $calculaSalarioMaior;
    $calculaAumentoDoMenorSalario = $salario + $calculaSalarioMenor;
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fintech-fulbanck</title>
</head>
<body>
    <?php
        if($salario > 5000){
    ?>        
        <h1>O funcionário(a) <?= $nome ?> passará a receber R$: <?= number_format($calculaAumentoDoMaiorSalario, 2, ",", ".") ?></h1>    
    <?php        
        }else{
    ?>        
        <h1>O funcionário(a) <?= $nome ?> passará a receber R$: <?= number_format($calculaAumentoDoMenorSalario, 2, ",", ".") ?></h1>   
    <?php        
        }
    ?>    
</body>
</html>