<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Idade</title>
</head>
<body>
    <?php 
        $anoNasci = $_GET['anoNasci'] ?? 0;
        $ano = $_GET['ano'] ?? date("Y");
        $idade = $ano - $anoNasci;
    ?>
    <main>
        <h1>Calculadora de Idade</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasci">Insira o ano de seu nascimento</label>
            <input type="number" name="anoNasci" id="anoNasci">
            <label for="ano">Insira o ano que você quer</label>
            <input type="number" name="ano" id="ano" placeholder="<?php date("Y")?>">
            <input type="submit" value="Calcular Idade">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
        if($ano < $anoNasci) {
            echo "<p>Ano escolhido inferior ao no de nascimento, você ainda não nasceu</p>";
        }
        if($ano > $anoNasci) {
            echo " <p>Quem nascem em $anoNasci vai ter <strong>$idade anos</strong> em $ano </p>";
        }
        ?>
    </section>
    
</body>
</html>