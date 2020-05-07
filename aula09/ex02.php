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
            $a = isset($_GET["ano"])? $_GET["ano"] : 1992;
            $i = date("Y") - $a;
            echo "você nasceu em $a e terá $i anos.<br>";

            /*
            if($i < 16){
                $tipoVoto = "Não votar";
            }else{
                if(($i >= 16 && $i < 18 ) || ($i > 65)){
                    $tipoVoto = "Voto opcional";
                }else{
                    $tipoVoto = "Voto obrigatório";
                }
            }*/
            //Usando elsif
            if($i < 16){
                $tipoVoto = "Não votar";
            }elseif(($i >= 16 && $i < 18 ) || ($i > 65)){
                $tipoVoto = "Voto opcional";
            }else{
                $tipoVoto = "Voto obrigatório";
            }
            echo "Para essa idade:<br>$tipoVoto";
        ?>
        <hr>
        <a href="ex02.html">Voltar</a>
    </section>
</body>
</html>