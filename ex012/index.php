<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobais</title>
</head>
<body>
    <main>
    <h1>Superglobais </h1>

    <h2>$_GET</h2> 
    <p>Gera array associativo com todas as variaveis que passaram por parametro atraves de uma URL</p>
    <h2>$_POST</h2>
    <p>Pega dados enviados pelo pacote/cabeçalho</p>
    <h2>$_REQUEST</h2> 
    <p>Request junta um pouco do get e post e gera um vetor só dos dois</p>
    <h2>$_COOKIES</h2>
    <h2>São pequenas variaveis guardadas dentro do navegador por determinado tempo</h2>
    <h2>$_FILES</h2>
    <h2>Pega os arquivos que foram feitos uploads</h2>
    <h2>$_SESSION</h2>
    <h2>Permite que variaveis de seção (variaveis que não perdidas entre navegação de paginas) não sejam perdidas </h2>
    <h2>$_ENV</h2>
    <h2>Variaveis de ambiente do servidor</h2>
    <h2>$_SERVER</h2>
    <h2>$GLOBALS</h2>
    <H2>A variavel global mais completa, mostra os dados de todas as outras anteriores</H2>
    <pre>
        <?php 
            setcookie("dia-da-semana", "segunda", time() + 3600); // time() determina o tempo que ele vai ficar, o 3600 é referente a uma hora pois 1 hr é o equivalente a 3600s

            session_start();
            $_SESSION["teste"] = "funcionou";

            //Query string é uma solicitação quando tem uma URL 
            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1>Superglobal SECTION</h2>";
            var_dump($_SESSION);

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV);

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);
        ?>
    </pre>
    </main>
</body>
</html>