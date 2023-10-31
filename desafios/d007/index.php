<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <?php
            $salario = $_REQUEST['sal'] ?? 0;
            $salMin = 1320;
            $numSal = $salario/$salMin;
            $salInt = intval($salario/$salMin);
            $resto = $numSal - $salInt;
            $salResto = $resto * $salMin;
        ?>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="idsal">Salario (R$)</label>
            <input type="number" name="sal" id="idsal" step="0.01" value="<?=$salMin?>">
            <p>Considerando o salário mínimo de R$ <?=$salMin?> </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>resultado Final</h2>
        <p>Quem recebe um salário de R$ <?=number_format($salario, 2, ",", ".")?> ganha <strong><?=$salInt?> salários mínimos</strong> + R$ <?=number_format($salResto, 2, ",", ".")?>.</p>
    </section>
</body>
</html>