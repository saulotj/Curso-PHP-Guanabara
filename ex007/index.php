<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    
    <?php 
        /*
        Ordem de Precedência
        1º **
        2º * 3º / 4º %
        5º + 6º -
        */
        $res = 50 / 2 + 3 **2;
        echo "50 / 2 + 3 ** 2 <br>";
        echo "O resultado é $res";

        //Outras operações aritméticas

        echo "<h2>Outras operações aritméticas</h2>";
        echo "Funções: abs() base_conver()<br> ceil() -> arrendonda para cima, floor() -> arredonda para baixo, round(), hypot(), intdiv() -> faz a divisão real, min() , max(), pi() ou M_PI, pow() -> potencia, sin(), cos(), tan(), sqrt() -> raiz quadrada de um numero";
        $r = abs(500);
        echo '$r = abs(500)<br>';
        echo "A resposta é $r<br>";

        echo "<h2>Base Convert</h2>";

        $r = base_convert(254, 10, 2);
        echo "A resposta é $r";

        echo "<h2>intdiv() divisão real</h2>";
        $r = intdiv(5, 2);
        echo("A resposta é $r");

        echo "<h2>min() e max()</h2>";

        $r = max(5, 2, 7, 5, 1, 9, 7, 6);
        echo '$r = max(5,2,7,5,1,9,7,6)<br>';
        echo "Maior valor $r<br>";
        $r = min(5, 2, 7, 5, 1, 9, 7, 6);
        echo '$r = min(5,2,7,5,1,9,7,6)<br>';
        echo "Menor valor $r<br>";

        echo "<h2>PI</h2>";
        $r = pi();
        echo "A resposta é $r";

        echo "<h2>Potencia - pow()</h2>";
        $r = 5 ** 2;
        echo "5 ** 2 == $r<br>";

        $r = pow(5, 2);
        echo "pow(5, 2) = $r";
        echo "<h3>A diferença entre a função pow() e o operador ** é que ao utilizar a a função eu perco a ordem de precedência";

        echo "<h2>Raiz quadrada de um húmero</h2>";
        $r = sqrt(81);
        echo "sqrt(81) = $r";
        echo "<br>Raiz quadrada usando potencia<br>";
        $r = 81 ** (1/2);
        echo "81 ** (1/2) = $r<br>";
        echo "Raiz cúbica<br>";
        $r = 27 ** (1/3);
        echo "81 ** (1/3) = $r";


    ?>
</body>
</html>