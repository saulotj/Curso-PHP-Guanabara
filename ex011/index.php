<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>

<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
        if (isset($_GET['numero'])) {
            $numero = $_GET['numero'];
            $parte = explode(',', $numero);
            $inteiro = $parte[0];
            $fracionado = $parte[1];
            if ($fracionado == null) {
                echo "<p>Número inteiro: $inteiro</p>";
            } else {

                echo "<p>Número inserido: $numero</p>
                <p>Número inteiro: $inteiro</p> <p>Número fracionado: $fracionado</p>";
            }
        }
        ?>
    </main>
    <section>
        <form action="" method="get">
            <input type="text" name="numero" id="idNumero">
            <input type="submit" value="Analisar">
        </form>
    </section>
</body>

</html>