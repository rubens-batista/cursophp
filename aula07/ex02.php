<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula07 - Operador Relacionais</h1>
        <?php
            $a = 3;
            $b = "3";
            //$r = $a == $b ? "Sim" : "Não"; # A é considerado igual a B, mesmo sendo de tipos diferentes.
            $r = $a === $b ? "Sim" : "Não"; # A é não é considerado identico ao B.
            echo "As variáveis A e B são identicas? $r";
        ?>
    </section>
</body>
</html>