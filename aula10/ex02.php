<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula10 - Estrutura Condicional Switch</h1>
        <?php
            $d = isset($_GET["ds"])?$_GET["ds"] : 0;
            switch($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :D";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto! ;D";
                    break;
                default:
                    echo "Dia da semana invalido";
            };
        ?>
        <br>
        <a href="javascript:history.go(-1)" class="back">voltar</a>
    </section>
</body>
</html>