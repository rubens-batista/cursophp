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
        <h1>Curso PHP #Aula06 - Variáveis Referenciadas</h1>
        <?php
            $a = 3;
            $b = $a;
            $b += 5;
            echo "A variavel A vale $a";
            echo "<br>A variavel B vale $b";
            $c = 3;
            $d = &$c; // $d está referenciando o $c, sendo assim $c tambem referencia o $d
            $d += 5;
            echo "<hr>";
            echo "A variavel C vale $c";
            echo "<br>A variavel D vale $d";
        ?>
    </section>
</body>
</html>