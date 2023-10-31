<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Resultado Final </h1>
        <?php
            $numero = $_REQUEST["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "
                <p>O numero escolhido foi <strong>$numero</strong></p>
                <p>O seu <em>antecessor</em> é $antecessor</p>
                <p>O seu <em>sucessor</em> é $sucessor</p>"
            ?>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </section>
</body>
<em></html></em>