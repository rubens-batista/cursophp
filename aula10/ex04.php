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
                    echo "Você mora na <span class='foco'>Região Norte</span>";
                    break;
                case 2:
                    echo "Você mora na <span class='foco'>Região Nordeste</span>";
                    break;
                case 3:
                    echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
                    break;
                case 4:
                    echo "Você mora na <span class='foco'>Região Suldeste</span>";
                    break;
                case 5:
                    echo "Você mora na <span class='foco'>Região Sul</span>";
            };
        ?>
        <br>
        <a href="javascript:history.go(-1)" class="back">voltar</a>
    </section>
</body>
</html>