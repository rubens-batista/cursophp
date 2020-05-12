<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula16</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula16 - Funções String</h1>
        <?php
            $p = "leite";
            $pr = "4.5";

            echo "<p>O $p custa R$ $pr</p>";
            echo "<p>O $p custa R$ ". number_format($pr, 2). "</p>";
            printf("<p>O %s custa R$ %.2f</p>", $p, $pr); //$.2f = float com duas casas decimais.
        ?>
    </section>
</body>
</html>