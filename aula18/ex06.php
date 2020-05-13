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
        <h1>Curso PHP #Aula18 - Array</h1>
        <pre>
            <?php
                $m = array(
                    array(6,4),
                    array(4,9),
                    array(3,2)
                );
                $m[0][1] = $m[2][0]; #substitui os valores dentro das linhas e colunas
                print_r($m);
            ?>
        </pre>
    </section>
</body>
</html>