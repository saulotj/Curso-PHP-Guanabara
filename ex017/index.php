<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Aritméticas</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
        $resultadoMedia;
        $resultadoPonderado;

        $resultadoMedia = number_format(($valor1 + $valor2)/2, 2 ,'.','');
        $resultadoPonderado = number_format(($peso1 * $valor1 +  $peso2 * $valor2)/($peso1 + $peso2), 2 , '.', '');
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="valor1">1º Valor:</label>
        <input type="number" name="valor1" id="valor1">
        <label for="peso1">1º Peso:</label>
        <input type="number" name="peso1" id="peso1">
        <label for="valor2">2º Valor:</label>
        <input type="number" name="valor2" id="valor2">
        <label for="peso2">2º Peso</label>
        <input type="number" name="peso2" id="peso2">
        <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analisando os valores $valor1 e $valor2<br>";
            echo "A <strong>Média Aritmérica</strong> entre os valores é igual a $resultadoMedia.<br>";
            echo "A <strong>Média Aritmética Ponderada</strong> com pesos 1 e 5 é igual a $resultadoPonderado."
        ?>
    </section>
</body>
</html>