<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de raiz</title>
</head>
<body>

<?php 
    $numero = $_GET['numero'] ?? 0;
    $raiz2 = number_format($numero ** (1/2), 3, '.', '');
    $raiz3 =  number_format($numero ** (1/3), 3 , '.', '');
?>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        <h1>Informe um número</h1>
        <label for="numero">Número</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular Raizes">
    </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
            echo "<ul>
                    <li>A sua raiz quadrada é <strong>$raiz2</strong></li>
                    <li>A sua raiz cúbica é <strong>$raiz3</strong></li>
                </ul>";
        ?>
    </section>
</body>
</html>