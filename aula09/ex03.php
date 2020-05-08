<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula09 - Estrutura condicional if</h1>
        <?php
            #Obtendo valores
            $n1 = isset($_GET["num1"])? $_GET["num1"] : "Numero não definido";
            $n2 = isset($_GET["num2"])? $_GET["num2"]: "Numero não definido";
            $m = ($n1 + $n2) / 2;
            #Convertendo para 1 casa decimal.
            $num1 = number_format($n1, 1);
            $num2 = number_format($n2, 1);
            $media = number_format($m, 1);
            #Condicional
            if($m < 7 ){
                echo "A média entre <span class='foco'>$num1</span> e <span class='foco'>$num2</span> é igual a <span class='foco'>$media</span><br>";
                echo "Situação do aluno: <span class='foco'>REPROVADO</span>";
            }else{
                echo "A média entre <span class='foco'>$num1</span> e <span class='foco'>$num2</span> é igual a <span class='foco'>$media</span><br>";
                echo "Situação do aluno: <span class='foco'>APROVADO</span>";
            };
        ?>
        <hr>
        <a href="ex03.html">Voltar</a>
    </section>
</body>
</html>