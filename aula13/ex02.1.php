<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula13 - Estrutura Repetição com Váriavel de controle</h1>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:1;

            for($c = 1; $c <= 10; $c++){
                $r = $n * $c;
                echo "$n x $c = $r<br>";
            }
        ?>
        <br><a href="javascript:history.go(-1)" class="back">Voltar</a>
    </section>
</body>
</html>