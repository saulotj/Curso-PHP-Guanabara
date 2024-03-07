<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <?php
    $valor = $_GET['valor'] ?? 0;
    $nota100 = 0;
    $nota50 = 0;
    $nota10 = 0;
    $nota5 = 0;
    $saque = $valor;
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    $erro = "<h2>Valor invaládio, só é possivel sacar multiplos de 5!</h2>";
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="valor">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php
        if (substr($valor, -1) % 5 != 0) {
            echo $erro;
        }

        if (substr($valor, -1) % 5 == 0) {
            while ($saque >= 5) {
                if ($saque >= 100) {
                    $saque = $saque - 100;
                    $nota100++;
                }
                if ($saque >= 50 && $saque < 100) {
                    $saque = $saque - 50;
                    $nota50++;
                }
                if ($saque >= 10 && $saque < 50) {
                    $saque = $saque - 10;
                    $nota10++;
                }
                if ($saque >= 5 && $saque < 10) {
                    $saque = $saque - 5;
                    $nota5++;
                }
            }
            echo  "<h2>Saque de " . numfmt_format_currency($padrao, floatval($valor), "BRL") . " realizado</h2> <br>";
            echo "O caixa eletrônico vai te entregar as seguintes notas:<br>";
            echo "<ul> 
                <li><img src = 100reais.jpg> x$nota100</li>
                <li><img src = 50reais.jpg> x$nota50</li>
                <li><img src = 10reais.jpg> x$nota10</li>
                <li><img src = 5reais.jpg> x$nota5</li>
            </ul>";
        }
        ?>
    </section>

</body>

</html>