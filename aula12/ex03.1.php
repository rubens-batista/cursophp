<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula12 - Estrutura de repetição while(part2)</h1>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]: 1;

            echo "<h4>Mostrando a Tabuada de $n</h4><br>";
            $c = 1;
            do{
                $t = $n * $c;
                echo "$n x $c = $t<br>";
                $c++;
            }while($c <= 10);
        ?>
        <br><a href="ex03.php" class="back">Voltar</a>
    </section>
</body>
</html>