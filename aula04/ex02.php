<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula04 - Tipos</h1>
        <?php 
            $nome = "Rubens";
            $last = "Batista";
            $idade = 27;
            echo $nome. " tem ". $idade. " anos.</br>"; // Concatenação
            echo "$last tem $idade anos!" // Maneira mais simples de se fazer
            //PHP Precisa que seja "" duplas e não '' simples.
        ?>
    </section>
</body>
</html>