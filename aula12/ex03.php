<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula12 - Estrutura de repetição while(parte2)</h1>
        <form action="ex03.1.php" method="get">
            <label for="tab">Número:</label>
            <select name="num" id="tab">
                <?php
                    $c = 1;
                    do{
                        echo "<option value='$c'>$c</option>";
                        $c++;
                    }while($c <= 10);
                ?>
            </select>
            <button type="submit">Tabuada</button>
        </form>
    </section>
</body>
</html>