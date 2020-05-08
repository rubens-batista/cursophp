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
            $estado = isset($_GET["estado"])?$_GET["estado"]: 0;
            
            switch($estado){
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                case 7:
                    echo "Você mora na <span class='foco'>Região Norte</span>";
                    break;
                case 8:
                case 9:
                case 10:
                case 11:
                case 12:
                case 13:
                case 14:
                case 15:
                case 16:
                    echo "Você mora na <span class='foco'>Região Nordeste</span>";
                    break;
                case 17:
                case 18:
                case 19:
                    echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
                    break;
                case 20:
                case 21:
                case 22:
                case 23:
                    echo "Você mora na <span class='foco'>Região Suldeste</span>";
                    break;
                case 24:
                case 25:
                case 26:
                    echo "Você mora na <span class='foco'>Região Sul</span>";
            };
        ?>
        <br>
        <a href="javascript:history.go(-1)" class="back">voltar</a>
    </section>
</body>
</html>