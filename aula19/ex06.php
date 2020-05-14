<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes Parte 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula19 - Vetores e Matrizes Parte 2</h1>
        <pre>
            <?php
                $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                print_r($v);
                krsort($v); // Coloca os indices em ordem reversa
                print_r($v);
            ?>
        </pre>
    </section>
</body>
</html>