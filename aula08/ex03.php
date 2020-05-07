<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Inicio PHP-->
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto generico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#00ffff";
    ?>
    <!--Fim PHP-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08</title>
    <link rel="stylesheet" href="style.css">
    <style>
        span.texto{
            font-size:<?php echo $tam; ?>; /* Somente funciona dentro do arquivo .php */
            color:<?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula08 - Interação HTML5 + PHP</h1>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <br>
        <a href="ex03.html">Voltar</a>
    </section>
</body>
</html>