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
        <h1>Curso PHP #Aula00 - nome</h1>
        <?php
            function soma($a, $b){
                //$s = $a + $b; #dispensavel
                //return $s;
                return $a + $b;
            }
            $x = 3;
            $y = 8;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é = $r";
        ?>
    </section>
</body>
</html>