<?php

    if(isset($_POST["texto"]))
    {

        $texto = $_POST["texto"];

        $qnt_caracteres = strlen($_POST["texto"]);

        echo("<script> alert('O texto $texto possui $qnt_caracteres caracteres.'); </script>");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="../../Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="./Page.css">

        <title> Exercício 04 </title>

    </head>

    <body>

        <form action="./Page.php" method="post">

            <label for="texto"> Escreva algo: </label>
            <input type="text" name="texto" id="texto" required>

            <div>

                <a href="../../Index.html"> Voltar </a>

                <button type="reset"> Limpar </button>

                <button type="submit"> Contar </button>

            </div>

        </form>
        
    </body>

</html>