<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do calculo</h1>
    </header>
    <main>
        <?php 
            $number = $_GET['number'] ?? 'Sem número';
            
            echo "Número escolhido foi $number  <br> Seu sucessor é ". ($number + 1) . "<br> Seu antecessor é ". ($number -1);
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar para a página anterior<a></p>
    </main>
</body>
</html>