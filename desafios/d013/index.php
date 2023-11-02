<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        $valor = (int)$_GET['valor'] ?? 0;

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
            <input type="number" name="valor" id="valor" min="0" step="5" value="<?=$valor?>" required>
            <h6>*Notas disponíveis: R$100 R$50 R$10 R$5</h6>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="100" class="nota"> x <?=$n100?></li>
            <li><img src="img/50-reais.jpg" alt="50" class="nota"> x <?=$n50?></li>
            <li><img src="img/10-reais.jpg" alt="10" class="nota"> x <?=$n10?></li>
            <li><img src="img/5-reais.jpg" alt="5" class="nota"> x <?=$n5?></li>
        </ul>
    </section>
</body>
</html>