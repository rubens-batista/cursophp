<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula05 - Operadores Aritméticos</h1>
        <?php
            $n1 = $_GET["a"]; // $_GET pega os dados da url
            $n2 = $_GET["b"];
            $m = ($n1 + $n2) / 2;
            echo "<h2>Valores recebidos: $n1 e $n2</h2><br>";

            echo "A soma vale ".($n1+$n2);
            echo "<br> A subratração vale ".($n1-$n2);
            echo "<br> A multiplicação vale ".($n1*$n2);
            echo "<br> A divisão vale ".($n1/$n2);
            echo "<br> O modulo vale ".($n1%$n2);
            echo "<br> A media vale $m";
        ?>
    </section>
</body>
</html>