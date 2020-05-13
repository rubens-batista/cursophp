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
            <?php
                $v = array(
                    "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65
                );
                $v["fuma"] = true;
                //print_r($v);
                foreach($v as $k => $c){
                    echo "O campo $k possui conteudo $c<br>";
                }
            ?>
        </pre>
    </section>
</body>
</html>