<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustador de Preços</title>
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $porcentagem = $_GET['porcentagem'] ?? 0;
        $reajuste = (($porcentagem/100) + 1) * $preco;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>">
        <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">
            <label for="reajuste">Qual será o percentual de reajuste?<?php echo "(<strong>$porcentagem%</strong>)"?></label>
            <input type="range" name="porcentagem" id="porcentagem">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $precoFormatado = numfmt_format_currency($padrao, floatval($preco), "BRL");
            $reajusteFormatado = numfmt_format_currency($padrao, floatval($reajuste), "BRL");

            echo "<p>O produto que custava $precoFormatado, com o <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>$reajusteFormatado</strong> a partir de agora.</p>";
        ?>
    </section>
</body>
</html>