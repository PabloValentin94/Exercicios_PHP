<?php

    if(isset($_POST["numero"]))
    {

        $_POST["numero"] = str_replace(",", ".", $_POST["numero"]);

        $expressao = $_POST["numero"] . " X " . $_POST["numero"];

        $resultado = pow((float) $_POST["numero"], 2);

        echo("<script> alert('$expressao (Quadrado) = $resultado'); </script>");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="../../Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="./Page.css">

        <title> Exercício 02 </title>

    </head>

    <body>

        <form action="./Page.php" method="post">

            <label for="numero"> Insira um número: </label>
            <input type="text" name="numero" id="numero" required>

            <div>

                <a href="../../Index.html"> Voltar </a>

                <button type="reset"> Limpar </button>

                <button type="submit"> Calcular </button>

            </div>

        </form>
        
    </body>

</html>