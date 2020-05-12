<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula15 - Function parte 2</h1>
        <?php
            function teste(&$x){
                $x += 2;
                echo "<p>O valor de x é $x</p>";
            }
            $a = 3;
            teste($a);
            echo "<p>O valor de a é $a</p>";
        ?>
    </section>
</body>
</html>