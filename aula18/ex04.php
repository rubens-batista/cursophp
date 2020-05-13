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
                $v = array(
                    3 => 5,
                    1 => 9,
                    0 => 8,
                    7 => 7
                );
                unset($v[0]);
                print_r($v);
            ?>
        </pre>
    </section>
</body>
</html>