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
            $t = "Aqui temos um texto gitante craido pelo php e vai mostrar o funcionamento da função wordwrap.";
            $r = wordwrap($t, 5, "<br>\n", true);
            echo $r;
        ?>
    </section>
</body>
</html>