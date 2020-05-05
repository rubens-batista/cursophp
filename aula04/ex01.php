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
            $n = 4;
            $no = "Rubens";
            //$no = (int)"Rubens"; // Retorna 0
            //$no = (int)"10Rubens"; //Ele vai considerar o número 10 (Somente se o número estiver no ínicio)
            $n = 4.5;

            echo $n;
        ?>
    </section>
</body>
</html>