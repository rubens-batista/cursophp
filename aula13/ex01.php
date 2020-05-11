<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula13 - Estrutura Repetição com Váriavel de controle</h1>
        <?php
            for($i = 1; $i <= 10; $i++){
                echo "$i ";
            }
            echo "<hr>";
            for($i = 10; $i >= 1; $i--){
                echo "$i ";
            }
            echo "<hr>";
            for($i = 0; $i <= 50; $i+=5){
                echo "$i ";
            }
            echo "<hr>";
            for($i = 20; $i >= 0; $i-=2){
                print "$i "; // print tbm é outro comando de saida
            }
        ?>
    </section>
</body>
</html>