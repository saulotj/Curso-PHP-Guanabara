<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_REQUEST); É uma junção de $_GET $_POST $_COOKIES
        
            $nome = $_GET['nome'] ?? "sem nome";
            $sobrenome = $_GET['sobrenome'] ?? "desconhecido";

            echo "<p>Olá <strong>$nome<strong> <strong>$sobrenome<strong>! </p>";
        ?>
       <p><a href="javascript:history.go(-1)">Voltar para a página anterior<a></p>
    </main>
</body>
</html>