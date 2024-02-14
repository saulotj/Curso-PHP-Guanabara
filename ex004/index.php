<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>

<body>
    <h1>Tipos Primitivos no PHP</h1>
    <?php
        echo "Em PHP as variáveis são fracamente tipadas";

    /*
        Categorias dos tipos primitivos
        1º escalares
        2º compostos
        3º especiais
    */

                                                    //Tipos escalares

    //Tipo primitivo string
    $sobrenome = "Silva"; //string = sequência de letras, números e símbolos, sempre representados entre aspas.

    //Tipo primitivo int ou integer
    $idade = 34; // int ou integer = um valor numérico inteiro, aquele que vem sem a parte decimal

    //Tipo primitivo float, double ou real
    $peso = 85.9; // float, double ou real = um valor numério Real, que vem com a parte decimal, depois do ponto flutuante.

    //Tipo primitivo boolean
    $casado = true; // bool ou boolean = um valor lógico ou Booleano, que aceita apenas os valores verdadeiro ou falso (true ou false)

    /*
        "RJ" - string ----------  -19 - int
        3.1415 - double --------  "false" - string
        17 - int     -----------  0x1A - int => todo numero começado em 0x para PHP é um número hexadecimal
        true - bool  -----------  3e2 - double => todo número representado por potencia é double/float 
        "" - string  -----------  "1024" - stirng
    */

        // 0x = hexadecimal 0b = binário 0 = Octal
        echo "<h2>Teste dos números primitivos</h2>";
        $numHexa = 0x1A;
        echo "O valor da variável em hexadecimal é $numHexa<br>";
        $numBi = 0b1011;
        echo "O valor da variavel em binário é $numBi<br>";
        $numOct = 010;
        echo "O valor da variavel em octal é $numOct<br>";
        $numPot = 3e2;
        echo "O valor da potencia do número é de $numPot<br>";

        $v = 300;
        var_dump($v); //é uma função interna do PHP a qual mostra na tela todas as informações da variavel
        $v = 45.2;
        var_dump($v);
        $v = "Gustavo";
        var_dump($v);
        $v = 3e2;
        var_dump($v);
        $v = true; // é todo valor que seja 1 ou qualquer outro valor que não seja false
        echo "<br>";
        var_dump($v);
        echo "<br>O valor da variavel v é $v<br>";
        $v = false; // é 0, NULL, vazio e etc
        var_dump($v);
        echo "<br>O valor da variavel v é $v";

        //Outras categorias de tipos primitivos

        /*
        Compostos
        -Array
        -Object
        */

        echo "<br><h2>Tipo primitivo: Composto - Array</h2>";
        $vet = [6, 2.5, "Maria", false, 5 ];
       // echo "O vetor é $vet"; Warning: Array to string conversion in C:\xampp\htdocs\Curso PHP\ex004\index.php on line 81
        var_dump($vet);

        echo "<br><h2>Tipo primitivo: Composto - Object</h2>";
        
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
   ?>
</body>

</html>