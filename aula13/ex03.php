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
            $n = isset($_GET["num"])?$_GET["num"]: 1;

            echo "<h1>Analisando o número $n ...</h1>";
            echo "Valores multiplos: ";
            $totalmult = 0; //variavel para pegar o total de multiplos
            #contador para verificar se o resto da divisão é 0
            for ($c = 1; $c <= $n; $c++) {
                if ($n % $c == 0) {
                    $totalmult++;
                    echo "$c ";
                }
            }
            echo "<p>Total de multiplos: $totalmult</p>";
            #condição para verificar se é primo ou não
            if($totalmult <= 2){ // Número primo só é divisivel por 1 e por ele mesmo, sendo assim apenas por 2 números.
                $primo = "É PRIMO!";
            }else{
                $primo = "NÃO É PRIMO!";
            }
            echo "<p>Resultado de $n: <span class='foco'>$primo</span></p>";
        ?>
        <p><a href="ex03.html" class="back">Voltar</a></p>
    </section>
</body>
</html>