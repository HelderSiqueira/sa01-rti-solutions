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
    <form method="GET" action="calcula-energia.php">
        <div class="input-group">
            <h1>Nome completo</h1>
            <input type="text" name="nomeCompleto" placeholder="Nome completo do cliente" required/>
        </div>
        <div class="input-group">
            <h1>Endereço</h1>
            <input type="text" name="endereco" placeholder="Nome da rua, número residêncial" required/>
        </div>
        <div class="input-group">
            <h1>Consumo em Quilowatts-hora</h1>
            <input type="number" min="0" name="gastoEnergia" placeholder="Consumo em kWh" required/>
        </div>
        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>