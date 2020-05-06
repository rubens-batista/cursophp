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
        <h1>Curso PHP #Aula06 - Operadores de Incremento</h1>
        <?php

        /* 
            Esse exercicio
            pretende demostra o uso
            de operadores de incremento
            e decremento
        */
            $atual = $_GET["aa"]; # Essa linha vai pegar o ano atual na url
            echo "O ano atual é $atual e o ano anterior é ". --$atual;
            echo "<br>O ano atual é $atual e próximo ano é ". ++$atual; // Pré e Pós faz diferença.
        ?>
    </section>
</body>
</html>