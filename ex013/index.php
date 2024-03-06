<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario PHP Retroalimentado</title>
</head>
<body>
    <?php 
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
        $resultado = $valor1 + $valor2;

    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="somar">
        </form>
    </main>

    <section id="resultado">
        <h1>Resultado da Soma</h1>
        <?php 
            $resultado;
            echo "<p>O resultado da soma entre <strong>$valor1</strong> e <strong>$valor2</strong> é <strong>$resultado</strong></p>";
        ?>
    </section>
</body>
</html>