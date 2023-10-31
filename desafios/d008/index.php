<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $num = $_REQUEST['num'] ?? 0;
        $raizQuad = number_format(sqrt($num), 3, ",", ".");
        $raizCub = number_format($num ** (1/3), 3, ",", ".");
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" step="0.01">

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?=$num?></strong>, temos:</p>
        <ul>
            <li><?="A raiz quadrada é <strong>$raizQuad</strong>"?></li>
            <li><?="A raiz cúbica é <strong>$raizCub</strong>"?></li>
        </ul>
    </section>
</body>
</html>