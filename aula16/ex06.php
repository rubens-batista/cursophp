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
            $letra = chr(99);
            echo "A letra de codigo 99 é $letra";
            echo "<hr>";
            $l = "C";
            $cod = ord($l);
            print("A letra $l, tem código $cod");
        ?>
    </section>
</body>
</html>