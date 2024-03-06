<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Idade</title>
</head>
<body>
    <main>
        <h1>Calculadora de Idade</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasci">Insira o ano de seu nascimento</label>
            <input type="number" name="idade" id="idade">
            <label for="ano">Insira o ano que você quer</label>
            <input type="number" name="ano" id="ano">
            <input type="submit" value="Calcular Idade">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
    
        ?>
    </section>
    
</body>
</html>