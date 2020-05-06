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
        <h1>Curso PHP #Aula07 - Operadores Lógicos</h1>
        <?php
            $ano = $_GET["an"];
            $idade = 2020 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.";
            $tipo = $idade >= 18 && $idade < 65 ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
            echo "<br>E dessa forma seu voto é $tipo";
        ?>
    </section>
</body>
</html>