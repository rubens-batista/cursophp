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
            $frase = "Eu vou estudar PHP agora";
            $cont = str_word_count($frase, 0);
            echo $cont;
        ?>
    </section>
</body>
</html>