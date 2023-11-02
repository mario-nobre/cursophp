<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $valorIni = $_GET['valor'] ?? 1;
        $taxa = $_GET['taxa'] ?? 0;
        $aumento = (float) $valorIni * $taxa/100;
        $valorFinal = $valorIni + $aumento;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="valor">Preço do Produto? (R$)</label>
            <input type="number" name="valor" id="valor" value="<?=$valorIni?>" step="0.01">
            <label for="taxa">Qual será o percentual de reajuste? <strong><span id="rangeValue"><?=$taxa?></span>%</strong></label>
            <input type="range" name="taxa" id="idtaxa" value="<?=$taxa?>" min="0" max="100" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=number_format($valorIni, 2, ",", ".")?>, com <strong><?=$taxa?>% de aumento</strong> vai passar a custar <strong>R$ <?=number_format($valorFinal, 2, ",", ".")?></strong> a parti de agora.</p>
</body>
<script>
    // Selecionar o elemento de input range e o elemento de exibição do valor
    //const rangeInput = document.getElementById('idtaxa');
    //const rangeValue = document.getElementById('rangeValue');

    // Atualizar o valor exibido em tempo real
    //rangeInput.addEventListener('input', function() {
        //rangeValue.textContent = rangeInput.value;
        //});
        
    function mudaValor() {
        rangeValue.innerText = idtaxa.value;
    }

</script>
</html>