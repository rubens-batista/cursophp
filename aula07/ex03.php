<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula07 - Operador Relacionais</h1>
        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1 + $nota2) / 2;
            echo "A media entre $nota1 é $nota2 é $m<br>";
            //$sit = $m < 7 ? "REPROVADO" : "APROVADO";
            //echo "A situação do aluno é $sit"
            echo "A situação do aluno é ". ($m < 7 ? "REPROVADO" : "APROVADO"); 
            /* 
                Parenteses necessário, por unário se comporta como operador,
                as expressões tem que ser colocadas em () no caso de concatenação.
            */
        ?>
    </section>
</body>
</html>