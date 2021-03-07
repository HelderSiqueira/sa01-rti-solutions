<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>fintech-fulbank</title>
</head>
<body>
    <form method="GET" action="calcula-aumento.php"> 
        <div class="input-group">
            <h1>Nome do funcionário</h1>
            <input type="text" name="nomeFuncionario" placeholder="Nome completo do funcionário" required/>
        </div>
        <div class="input-group">
            <h1>Salário Atual</h1>
            <input type="number" step="any" min="0" name="salarioRecebido" placeholder="Informe o seu atual salário" required/>
        </div>
        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>