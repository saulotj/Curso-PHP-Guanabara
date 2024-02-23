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
            $successor = $number + 1 ;
            $predecessor = $number - 1;
            echo "Número escolhido foi $number  <br> Seu sucessor é $successor <br> Seu antecessor é $predecessor";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior<a></p>
    </main>
</body>
</html>