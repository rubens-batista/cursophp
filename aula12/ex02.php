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
            $v = isset($_GET["val"])?$_GET["val"]: 1;
            echo "<h4>Calculando o fatorial de $v</h4>";

            $c = $v;
            $fat = 1;
            do{
                $fat = $fat * $c;
                $c--;
            }while($c >= 1);
            echo "<p>$v! = $fat</p>";
        ?>
        <a href="ex02.html" class="back">Voltar</a>
    </section>
</body>
</html>