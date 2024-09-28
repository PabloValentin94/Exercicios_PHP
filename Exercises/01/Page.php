<?php

    if(count($_POST) > 0)
    {

        $_POST["primeiro_numero"] = str_replace(",", ".", $_POST["primeiro_numero"]);

        $_POST["segundo_numero"] = str_replace(",", ".", $_POST["segundo_numero"]);

        $expressao = $_POST["primeiro_numero"] . " + " . $_POST["segundo_numero"];

        $resultado = (float) $_POST["primeiro_numero"] + (float) $_POST["segundo_numero"];

        echo("<script> alert('$expressao = $resultado'); </script>");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="../../Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="./Page.css">

        <title> Exercício 01 </title>

    </head>

    <body>

        <form action="./Page.php" method="post">

            <label for="primeiro_numero"> Insira o primeiro número: </label>
            <input type="text" name="primeiro_numero" id="primeiro_numero" required>

            <label for="segundo_numero"> Insira o segundo número: </label>
            <input type="text" name="segundo_numero" id="segundo_numero" required>

            <div>

                <a href="../../Index.html"> Voltar </a>

                <button type="reset"> Limpar </button>

                <button type="submit"> Calcular </button>

            </div>

        </form>
        
    </body>

</html>