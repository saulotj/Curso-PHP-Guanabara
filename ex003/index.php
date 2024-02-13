<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel</title>
</head>

<body>
    <h1>Tipos de Variaveis</h1>
    <?php

    /*
    Identificadores PHP 
       1º Variáveis sempre comeãm com símbolo $
       2º O segundo pode ser letra ou o símbolo_
       3º Aceita caracteres [a-z], [A-Z], [0-9] e [_]
       4º Aceita caracteres da tavbela ASCII a partir do codigo 128
       5º Aceita caracteres acentudaods como á, õ, ç
       6º A linguagem é case sensitive em relação aos nomes
       7º Nomes especiais como $this não podem ser usados
    */

    $nome = "Gustavo";
    $sobrenome = "Guanabara";
    //$nome = "Rafael";
    const PAIS = "Brasil";
    $idade = 43;
    $peso = 118.5;
    $casado = false;
    const CURSO = "TI";


    echo "Muito prazer $nome $sobrenome! Você mora no " . PAIS; 
    ?>

    <h2>Exemplos de identificadores</h2>

    <?php 
        $nome = "Pedro";

        //echo "É verdade que seu nome é $Nome ?";
        // Warning: Undefined variable $Nome in C:\xampp\htdocs\Curso PHP\ex003\index.php on line 43 devido a variavel com o N maiusculo

        $salário = 2500.75;

        echo "Seu salário é de R$ $salário.<br>";

        $valorµ = 200;

        echo "O valor é igual a $valorµ no programa.<br>";

        const _TX = 850;

        echo "Resultado = " . _TX;

        /*
        Recomentações para dar nomes as variaveis
            Tente dar nomes claros e de fácil identificação
            Evite nomes muito curtos ou muito longos
            Defina um padrão e siga em todo projeto
            Para variáveis, dê preferência a letras minúsculas
            Para constantes, dê preferência a letras maiúsculas
            Use CamelCase para métodos e atributos
            Use Snake Case para nomear constantes
            Não pode ter espaço entre as variáveis
        */

        //CamelCase

        $nomeCompletoCliente = "Camel Case";
        
        //Snake Caso

        $telefone_conteto_fornecedor = "Snake Case";
        
    ?>
</body>

</html>