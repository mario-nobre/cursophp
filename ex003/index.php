<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php
        // 0x = hexadecial
        // 0b = binario
        // 0 = octal

        $num = 010; // $num = 8 em decimal
        echo "o valor da variavel é $num <br>";

        $v = "mario";
        var_dump($v);

        $num2 = (int)3e2; // $num2 = 3*(10^2) - tipo float; int ou interger converte em inteiro
        echo "<br>o valor é $num2 <br>";
        var_dump($num2);

        echo "<br>";

        $casado = false;
        $casado2 = true;
        var_dump($casado);
        echo "<br>";
        echo "a variavel é $casado $casado2" // para false = vazio; para true = 1;


    ?>
</body>
</html>