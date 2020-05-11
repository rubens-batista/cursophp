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
        <h1>Curso PHP #Aula00 - nome</h1>
        <?php
            function soma($a, $b){
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
            }
            soma(3, 4);
            soma(8, 2);
            $x = 9;
            $y = 15;
            soma($x, $y);
        ?>
    </section>
</body>
</html>