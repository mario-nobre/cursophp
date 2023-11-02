<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $valor1 = $_REQUEST['valor1'] ?? 0;
        $peso1 = $_REQUEST['peso1'] ?? 1;
        $valor2 = $_REQUEST['valor2'] ?? 0;
        $peso2 = $_REQUEST['peso2'] ?? 1;

        $media = ($valor1 + $valor2)/2;
        $mediaPond = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" required>
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" required min="1">
            <label for="valor2">1° Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" required>
            <label for="peso2">1° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" required min="1">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das médias</h2>
        <p>Analisando os valores e</p>
        <ul>
            <li><strong>A Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($media, 2, ",", ".")?>.</li>
            <li><strong>A Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mediaPond, 2, ",", ".")?>.</li>
        </ul>
    </section>
</body>
</html>