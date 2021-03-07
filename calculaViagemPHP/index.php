<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sa01-rti-solutions</title>
    <link rel="stylesheet" href='styles-global.css'/>
</head>

<body>
    <form method="GET" action="calcula-frete.php">
        <div class="input-group">
            <h1>Cidade de Origem</h1>
            <input type="text" name="cidadeOrigem" placeholder="Cidade de origem" required/>
        </div>

        <div class="input-group">
            <h1>Destino</h1>
            <input type="text" name="cidadeDestino" placeholder="Cidade de destino" required/>
        </div>

        <div class="input-group">
            <h1>Pedágios</h1>
            <input type="number" step="1" min="0" name="pedagio" placeholder="Pedágios" required/>
        </div>

        <div class="input-group">
            <h1>Distância</h1>
            <input type="number" step="any" min="0" name="distancia" placeholder="Distância em KM" required/>
        </div>
        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>