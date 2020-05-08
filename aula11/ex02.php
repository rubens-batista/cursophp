<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula11 - Estrutura Repetição While</h1>
        <form action="ex02.1.php" method="get">
            <?php
                $c = 1;
                while($c <= 5){
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c++;
                };
                
            ?>
            <button type="submit" class="botao">Enviar</button>
        </form>
    </section>
</body>
</html>