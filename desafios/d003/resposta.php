<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $valor = $_GET["valor"];
            $valorArred = number_format($valor, 2, ",", ".");
            $cotacao = 4.99;

            $total = $valor / $cotacao;
            $arredonda = number_format($total, 2, ',', '.'); // formata o valor para duas casas decimais e separação por virgula nas casas decimais e . nas casas de milhares.

            echo "<p>Seus R $valorArred equivalem a <strong>US$ $arredonda</strong></p>";
            echo "<p><strong>*Cotação fixa de R$ " . number_format($cotacao, 2, ",", ".") . "</strong> informada diretamente no código.</p>"
        ?>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </section>
</body>
</html>