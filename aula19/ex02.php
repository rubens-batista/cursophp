<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes Parte 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula19 - Vetores e Matrizes Parte 2</h1>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                array_pop($v); // Elimina o ultimo elemento
                print_r($v);
                array_push($v, "O"); // Adiciona um elemento na ultima posição # Faz mesma coisa que o de baixo.
                //$v[] = "O";
                print_r($v);
            ?>
        </pre>
    </section>
</body>
</html>