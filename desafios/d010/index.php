<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio010</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $anoAtual = date('Y');
        $anoNasc = $_GET['nasc'] ?? 2000;
        $anoAlvo = $_GET['ano'] ?? $anoAtual;
        $idade = $anoAlvo - $anoNasc;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$anoNasc?>" max="<?=$anoAtual-1?>">
            <label for="ano">Quer saber a sua idade em que ano?(atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$anoAlvo?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php echo "Quem nasceu em $anoNasc vai ter <strong>$idade anos</strong> em $anoAlvo!"?>
    </section>
</body>
</html>