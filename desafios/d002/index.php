<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 002</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $numero = mt_rand(1,100);
            echo "O valor gerado foi <strong>$numero</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Voltar</button>
    </section>
</body>
</html>