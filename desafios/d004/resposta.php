<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            date_default_timezone_set("america/sao_paulo");
            // moeda corrente do brasil
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            //$data da cotacao de 7 dias atrás
            $inicio = date("m-d-Y", strtotime("-7 days"));
            //$data da cotacao do dia
            $fim = date("m-d-Y");
            // URL da API do Banco Central (um exemplo, verifique a documentação atual)
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

            $dataBr = date("d/M/Y");

            // Faça a solicitação HTTP
            $response = file_get_contents($url);

            // Verifique se a solicitação foi bem-sucedida
            if ($response !== false) {
                $data = json_decode($response, true);
                if (empty($data) == false) {
                    $cotacao_dolar = $data['value'][0]['cotacaoCompra'];
                    echo "Cotação do dólar em $dataBr: R$ $cotacao_dolar";

                    $valor = $_GET["valor"];

                    $dolar = $valor / $cotacao_dolar;

                    echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>".numfmt_format_currency($padrao, $dolar, "USD")."</strong>*</p>";
                } else {
                    echo "Erro ao fazer a solicitação HTTP.";
                }
            } else {
                echo "Erro ao fazer a solicitação HTTP.";
            }
        ?>
        <p>*Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/" target="_blank">Banco Central do Brasil</a></p>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </section>
</body>
</html>