<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        div.partes {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50%;
            height: 60px;
            background-color: lightblue;
            font-weight: bold;
        }

        div#divisor {
            border-left: 3px solid black;
            border-bottom: 3px solid black;
        }

        div#quociente {
            border-left: 3px solid black;
        }

        div#resto {
            text-decoration: underline;
        }

        div.linha {
            display: flex;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $num1 = $_GET["dividendo"] ?? 0;
        $num2 = $_GET['divisor'] ?? 1;
        $div = $num1/$num2;
        $resto = $num1 % $num2;
        $quociente = intval($div);
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="idnum1">Dividendo</label>
            <input type="number" name="dividendo" id="idnum1" value="<?=$num1?>">
            <label for="idnum2">Divisor</label>
            <input type="number" name="divisor" id="idnum2" value="<?=$num2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrurura da Divisão</h2>
        <div class="linha">
            <div class="partes"><?=$num1?></div>
            <div class="partes" id="divisor"><?=$num2?></div>
        </div>
        <div class="linha">
            <div class="partes" id="resto"><?=$resto?></div>
            <div class="partes" id="quociente"><?=$quociente?></div>
        </div>

    </section>
</body>
</html>