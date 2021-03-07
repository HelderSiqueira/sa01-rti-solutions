<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>XD Investimentos</title>
</head>
<body>
    <form method="GET" action="calcula-conversao.php">
        <div class="input-group">
            <h1>Quantidade em Reais</h1>
            <input type="number" min="1" step="any" name="quantidadeReais" placeholder="Valor a ser convertido" required/>
        </div>
        <h1>Tipo de moeda</h1>
        <div>
            <input type="radio" name="tipoMoeda" value="dolar" required/>
            <label for="dolar">$Dólar</label>
        </div>
        <div>
            <input type="radio" name="tipoMoeda" value="euro" required/>
            <label for="dolar">€Euro</label>
        </div>
        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>