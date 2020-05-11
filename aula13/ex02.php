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
        <form action="ex02.1.php" method="get">
            <label for="tab">Número:</label>
            <select name="num" id="tab">
                <?php
                    for($c = 1; $c <= 10; $c++){
                        print "<option value='$c'>$c</option>";
                    }
                ?>
            </select>
            <button type="submit">Tabuada</button>
        </form>
    </section>
</body>
</html>