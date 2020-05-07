<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula08 - Interação HTML5 + PHP</h1>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"]: "[Não informado!]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo!]";
            $idade = date("Y") - $ano;

            echo "$nome é $sexo tem $idade anos.";
        ?>
        <br>
        <a href="ex02.html">Voltar</a>
    </section>
</body>
</html>