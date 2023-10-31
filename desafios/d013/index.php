<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $valor = $_GET['valor'] ?? 0;

        $n100 = intval($valor / 100);
        $resto100 = $valor % 100;

        $n50 = intval($resto100 / 50);
        $resto50 = $resto100 % 50;

        $n10 = intval($resto50 / 10);
        $resto10 = $resto50 % 10;

        $n5 = intval($resto10 / 5);
    ?>
    <main>
    <h1>Caixa Eletrônico</h1>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" min="0" step="5" value="<?=$valor?>">
            <h6>*Notas disponíveis: R$100 R$50 R$10 R$5</h6>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>x <?=$n100?></li>
            <li>x <?=$n50?></li>
            <li>x <?=$n10?></li>
            <li>x <?=$n5?></li>
        </ul>
    </section>
</body>
</html>