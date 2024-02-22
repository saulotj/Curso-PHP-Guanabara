<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Formatos de String PHP</h1>

    <?php 
        /*
            Quatro formatos de Strings
            double quoted
                Equivalente a crase do JS (``)
                concatenation operator ( . )
                "Curso" . "PHP" = "CursoPHP" 
                Funciona para as "" e para ''
                Em double quoted existe a interpretação de conteudo
                Exemplo: "PHP\u{1F418}" \u => serve para mostrar elementos unicode -> PHP🐘
            single quoted
                'PGP\u{1F418}' -> não havará a interpretação de conteudo logo não tera a representação do emoji
            Heredoc
            Nowdoc
        */

        //variavel double quoted
        $nome = "Gustavo";
        $sobrenome = "Guanabara";

        //variavel single quoted
        $nome2 = 'Gustavo';
        $sobrenome2 = 'Guanabara';

        //double quoted
        echo "<h2>double quoted</h2>";
        echo "$nome $sobrenome \u{1f596}<br>";//Interpreta 
        echo "Olá $nome!<br>"; //Interpreta 

        //single quoted
        echo "<h2>single quoted</h2>";
        echo '$nome $sobrenome \u{1f596}<br>';//Não interpreta
        echo 'Olá $nome!'; //Não interpreta

        echo "<h2>Outro exemplo</h2>";
        echo "$nome2 $sobrenome2"; //Por mais que a variavel seja declarada com single quote aqui no echo eu pedi para ele interpretar ao utilizar o double quoted
        echo '<br>$nome2 $sobrenome2';

        //Constante e Funções
        echo "<h2>Constante</h2>";
        const ESTADO = "RJ";
        echo "Moro no ESTADO";// -> Moro no ESTADO como não tem o $ ele não vai interpretar como variavel
        echo '<br>Moro no Estado';// -> Moro no ESTADO
        echo "<br>Moro no " .ESTADO;// -> Moro no RJ é necessário usar o operador de concatenação para ele concatenar as constantes

        echo "<h2>Resultado de funções</h2>";
        echo "Estamos no ano de date('Y')";
        echo "<br>Estamos no ano de " .date('Y');// Para constantes e retorno de funções precisa usar o operador de concatenação

        $nom = "Rodrigo";
        $snom = "Nogueira";
        //echo "$nom"Minotauro"$snom"; Parse error: syntax error, unexpected identifier "Minotauro", expecting "," or ";" in C:\xampp\htdocs\Curso PHP\ex005\index.php on line 62
        echo '<br>$nom"Minotauro"$snom'; // $nom"Minotauro"$snom Ele não interpreta $nom e $snom porém o Minotauro como está entra double quote ele vai interpretar
        echo "<br>$nom \"Minotauro\" $snom"; // \ -> é sequência de escape,fala para o interpretador que não é para ele encerrar as aspas ali no canto porém para aspas duplas existem varias.
         /*
            \n Nova Linha (quebra linha para baixo)
            \t Tabulação Horizontal
            \\ Exibe barra invertida
            \$ Mostrar o cifrão $ 
            \u{} Codepoint Unicode
        */
        echo '<br>$nom \'Minotauro\' $snom'; // Sequência de escape para aspas simples só existe um

        echo "<br><h2>Sequência de Escape - double quote</h2>";
        
        //Sintaxe Heredoc
        $curso = "PHP";
        $ano = date('Y');
        $canal = "Curso em Vídeo";

        /*echo <<< FRASE

            Estou estudando 
            $curso em $ano
        FRASE;

        */

        echo <<< "FRASE"
        <h2>Sintaxe Heredoc</h2>
                Estou estudando $curso <br>
                    Pelo canal $canal <br>
                No ano de $ano
                \u{1F596}
        FRASE;
        
        

        //Sintaxe Nowdoc

        echo <<< 'FRASE'
        <h2>Sintaxe Nowdoc</h2>
        Estou estudando $curso 
        <br>  Pelo canal $canal 
        <br>  No ano de $ano
         \u{1F596}
        FRASE;
       ?>
</body>
</html>