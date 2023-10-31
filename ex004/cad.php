<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
        <main>
            <?php
                $nome = $_GET["nome"] ?? "sem nome"; // ?? = Operador de coalescência nula.
                $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; // ?? = caso abra a janela php sem os nome da variavel sobrenome então, escreva "desconhecido".
                echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>"
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p> <!-- link com configuração javascript para retornar 1 pagina anterior -->
        </main>
    </header>
</body>
</html>