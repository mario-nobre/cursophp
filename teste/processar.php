<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nome = $_POST["nome"];
          $comentario = $_POST["comentario"];

        // Agora você pode fazer algo com os dados, como enviá-los por e-mail ou salvá-los no banco de dados.

          echo "Retroalimentação enviada com sucesso. Obrigado!";
        }
        ?>
    </main>
</body>
</html>