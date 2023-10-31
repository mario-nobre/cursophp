<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 005</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php
            $numero = $_GET['numero'];
            if ($numero == "") {
                $numero = null;
            }

            $inteiro = intval($numero);

            $tamanhoNum = strlen($numero);
            $tamanhoInt = strlen($inteiro);
            $tamanhoDec = $tamanhoNum - $tamanhoInt - 1;

            $intFormat = number_format($inteiro, 0, ",", ".");
            $fracao = number_format($numero - $inteiro, $tamanhoDec, ",", ".");
            $numFormat = number_format($numero, $tamanhoDec, ",", ".");

            echo "<br>Analisando o número <strong>$numFormat</strong> informado pelo usuário:";
        ?>
        <ul>
            <li>A parte inteira do número é <?echo "<strong>$intFormat</strong>"?></li>
            <li>A parte fracionaria do número é <?echo "<strong>$fracao</strong>"?></li>
        </ul>
        <a href="index.html"><input type="button" value="Voltar"></a>
    </section>
</body>
<strong></html></strong>