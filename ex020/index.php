<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo</title>
</head>

<body>
    <?php
    $segundos = $_GET['segundos'] ?? 0;
    $minutos = 60;
    $horas = $minutos * 60;
    $dias = $horas * 24;
    $semanas = $dias * 7;

    var_dump($horas);
    var_dump($minutos);
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php
        $seg = $segundos;
        $tempo = $segundos;
        $semanas = floor($tempo / (60 * 60 * 24 * 7));
        $tempo %= (60 * 60 * 24 * 7);
        $dias = floor($tempo / (60 * 60 * 24));
        $tempo %= (60 * 60 * 24);
        $horas = floor($tempo / (60 * 60));
        $tempo %= (60 * 60);
        $minutos = floor($tempo / 60);
        $tempo %= 60;
        $segundos = $tempo;

        echo "<p>Analisando o valor que você digitou, <strong>$seg segundos</strong> equivalem a um total de:</p><br>";
        echo "<ul>
                    <li>$semanas semanas</li>
                    <li>$dias dias</li>
                    <li>$horas horas</li>
                    <li> $minutos minutos</li>
                    <li>$segundos segundos</li>
            </ul>"

        ?>
    </section>
</body>

</html>