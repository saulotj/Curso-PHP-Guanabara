<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia de uma divisão</title>
</head>
<body>
    <?php 
        $divisor = $_GET['n1'] ?? 1;
        $dividendo = $_GET['n2'] ?? 0;
        $resultado = floor($dividendo/$divisor);
        $resto = $dividendo%$divisor;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="n2">Dividendo</label>
        <input type="number" name="n2" id="n2">
        <label for="n1">Divisor</label>
        <input type="number" name="n1" id="n1">
        <input type="submit" value="Calcular">
    </form>
    </main>

    <section>
        <h1>Resultado da divisão</h1>
        <table>
            <tr>
                <th><?php echo "Dividendo: <strong>$dividendo</strong>"?></th>
                <th><?php echo "Divisor: <strong>$divisor</strong>"?></th>
            </tr>
            <tr>
                <td><?php echo"Resto: <strong>$resto</strong>"?></td>
                <td><?php echo "Resultado divisão: <strong>$resultado</strong>"?></td>
            </tr>
        </table>
    </section>
</body>
</html>