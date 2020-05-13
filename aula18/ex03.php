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
        <h1>Curso PHP #Aula18 - Array</h1>
        <pre>
            <table border="1">
                <tr>
                    <?php
                        $c = range(5,20,2);
                        foreach($c as $v){
                            echo "<td>$v ";
                        }
                    ?>
                </tr>
            </table>
        </pre>
    </section>
</body>
</html>