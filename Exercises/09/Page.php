<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="../../Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="./Page.css">

        <title> Exercício 09 </title>

    </head>

    <body>

        <form action="./List.php" method="post">

            <label for="lista_palavras"> Digite várias palavras,<br>separando-as por vírgula: </label>
            <input type="text" name="lista_palavras" id="lista_palavras" required>

            <div>

                <a href="../../Index.html"> Voltar </a>

                <button type="reset"> Limpar </button>

                <button type="submit"> Enviar </button>

            </div>

        </form>
        
    </body>

</html>