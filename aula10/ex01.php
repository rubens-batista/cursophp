<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula10 - Estrutura Condicional Switch</h1>
        <?php
            $n = isset($_GET["num"])?$_GET["num"] : 0;
            $o = isset($_GET["oper"])?$_GET["oper"] : 0;

            switch($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ (1/2);
            }
            echo "O resultado da operação solicitada foi <span class='foco'>$r</span>"
        ?>
        <br>
        <a href="ex01.html" class="back">voltar</a>
    </section>
</body>
</html>