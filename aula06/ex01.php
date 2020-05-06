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
        <h1>Curso PHP #Aula06 - Operadores de Atribuição</h1>
        <?php
            $preco = $_GET["p"];
            echo "O preço do produto é R$ $preco";
            //$preco = $preco + ($preco*10/100);
            $preco += $preco*10/100; #Operação mais simples e compacta.
            echo "<br>O novo preço com 10% de aumento será R$ ". number_format($preco, 2, ",", ".");
            $preco -= $preco*10/100;
            echo "<br>O novo preço com 10% de desconto será R$ ". number_format($preco, 2);
        ?>
    </section>
</body>
</html>