<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo salario</title>
</head>

<body>
    <?php
    $salario = $_GET['salario'] ?? 0;
    $salarioMinimo = 1412;
    $resto = $salario%$salarioMinimo;
    $qntSalario = floor( $salario / $salarioMinimo );

    ?>
    <main>
        <h1>Calculo Salarial</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Informe o seu Salário</label>
            <input type="number" name="salario" id="salario">
            <h4>Salário minimo atual <strong>R$1.412</strong></h4>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
        echo "Quem recebe um salário de R$$salario ganha até <strong>$qntSalario salários mínimos</strong> + R$$resto.";
        ?>
    </section>
</body>

</html>