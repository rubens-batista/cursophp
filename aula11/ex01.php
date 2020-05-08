<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula11 - Estrutura Repetição While</h1>
        <?php
            $c = 1;
            while($c <= 10){
                echo "<br>$c";
                $c++;
            };
            echo "<hr>";
            $cont = 10;
            while($cont >= 1){
                echo "$cont<br>";
                $cont-=2;
            };
        ?>
    </section>
</body>
</html>