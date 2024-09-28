<?php

    if(isset($_POST["data_inserida"]))
    {

        $componentes_data = explode("-", $_POST["data_inserida"]);

        $resultado = date("L", mktime(0, 0, 0, $componentes_data[1], $componentes_data[2], $componentes_data[0])) ? "é" : "não é";

        echo("<script> alert('O ano da data inserida $resultado bissexto.'); </script>");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="../../Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="./Page.css">

        <title> Exercício 08 </title>

    </head>

    <body>

        <form action="./Page.php" method="post">

            <label for="data_inserida"> Insira uma data: </label>
            <input type="date" name="data_inserida" id="data_inserida" required>

            <div>

                <a href="../../Index.html"> Voltar </a>

                <button type="reset"> Limpar </button>

                <button type="submit"> Verificar </button>

            </div>

        </form>
        
    </body>

</html>