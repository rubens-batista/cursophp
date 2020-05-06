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
        <h1>Curso PHP #Aula06 - Variáveis de Variáveis</h1>
        <?php
            $x = "abc";
            $$x = "def"; // Cria uma variavel $abc com conteudo "def"
            echo "O conteudo da variavel X é $x";
            echo "<br>A variavel criada recebeu o valor $abc"; // Variável criada por causa do $ antes da variável
        ?>
    </section>
</body>
</html>