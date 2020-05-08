<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <h1>Curso PHP #Aula11 - Estrutura Repetição While</h1>
        <?php
            #Pega os valores
            $inicio = isset($_GET["inicio"])?$_GET["inicio"]: 0;
            $fim = isset($_GET["fim"])?$_GET["fim"]: 0;
            $incremento = isset($_GET["incremento"])?$_GET["incremento"]: 0;
            if($inicio < $fim){
                #Faz a contagem progressiva
                $c = $inicio;
                while($c <= $fim){ #Enquanto contador for menor ou igual ao numero escolhido no '$fim'
                    echo "$c "; #Mostra o contador na tela
                    $c += $incremento; #Soma o contador + o incremento selecionado
                }
            }else{
                $c = $inicio;
                while($c >= $fim){ #Enquanto contador for menor ou igual ao numero escolhido no '$fim'
                    echo "$c "; #Mostra o contador na tela
                    $c -= $incremento; #Subtrai o contador - o incremento selecionado
                }
            }
        ?>
        <br>
        <a href="ex03.html" class="back">Voltar</a>
    </section>
</body>
</html>