<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula17</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula17 - Funções String Part2</h1>
        <?php
            $site = "Curso em Vídeo";
            $sub = substr($site, 0, 5);
            echo "$sub";
        ?>
    </section>
</body>
</html>