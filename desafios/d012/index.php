<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $tempo = $_GET['tempo'] ?? 0;
        $semanas = intval($tempo / 604800);
        $restoSem = $tempo % 604800;

        $dias = intval($restoSem / 86400);
        $restoDias = $restoSem % 86400;

        $horas = intval($restoDias / 3600);
        $restoHoras = $restoDias % 3600;

        $minutos = intval($restoHoras / 60);
        $segundos = $restoHoras % 60;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?=$tempo?>" min="0" required>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($tempo, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> Semanas</li>
            <li><?=$dias?> Dias</li>
            <li><?=$horas?> Horas</li>
            <li><?=$minutos?> Minutos</li>
            <li><?=$segundos?> Segundos</li>
        </ul>
    </section>
</body>
</html>