<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Número Aleatório</title>
</head>

<body>
    <header>
        <h1>Número aleatório gerado</h1>
    </header>
    <main>
        <?php

        $numero = gerarNumeroAleatorio();
        
        echo "Numero aleatorio gerado: $numero";
        function gerarNumeroAleatorio()
        {
            //rand() = 1951 - Linear Congrential Generator
            //mt_rand() = 1997 - Mersenne Twister 4x mais rapido que o rand()
            //random_int() gera números aleatórios criptograficamente seguros (porém é o mais lento)
            return mt_rand(0, 1000);
        }
        ?>
        <form action="" method="get">
            <input type="submit" value="Gerar Numero Aleatorio">
        </form>
    </main>
</body>

</html>