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
            $v[0] = 4;
            $v[1] = 8;
            $v[2] = 3;
            print_r($v);
            print "<hr>";
            $v2 = array(3, 7, 6, 2, 1, 9);
            print_r($v2);
            print "<hr>";
            $v3 = array(4, 6.2, "2", 3, 1, 5);
            var_dump($v3);
            print "<hr>";
            $v4 = array(4, 6.2, "2", 3, 1, 5);
            var_export($v4);
        ?>
    </section>
</body>
</html>