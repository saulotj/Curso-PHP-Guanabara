<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moeda</title>
</head>
<body>
    <h1>Conversor de Real para Dolar</h1>
    <main>
        <?php 
            $url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";

            $response = file_get_contents($url);
            $dolar;
            $real = $_GET['real'];
            $dataAtual = date('d/m/Y');

            if($response === FALSE) {
                die("Erro ao fazer a solicitação");
            }

            $data = json_decode($response, TRUE);
            if($data === NULL) {
                die("Erro ao decodificar a resposta JSON");
            }

            if(isset($data['USDBRL'])) {
              $dolar = number_format($data['USDBRL']['bid'], 2);
              echo "<p>Cotação do dolar na data $dataAtual no valor de US$$dolar";

            } else {
                echo "CHAVE 'USDBRL' não encontrada";
            }

            if(!empty($real)){
                $convertido = number_format($real / $dolar, 2);
                echo "<p>Valor convertido para Dólar: US$$convertido</p>";
            }

        ?>
    </main>

        <section>
            <form action="" method="get">
                <input type="text" name="real" id="idReal">
                <input type="submit" value="calcular">
            </form>
        </section>
</body>
</html>