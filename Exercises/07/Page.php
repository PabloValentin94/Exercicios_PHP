<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="../../Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="./Page.css">

        <title> Exercício 07 </title>

    </head>

    <body>

        <form action="./Index.php" method="post">

            <label for="lista_numeros"> Digite vários números,<br>separando-os por vírgula:<br><br>(Números decimais<br>não são permitidos!) </label>
            <input type="text" name="lista_numeros" id="lista_numeros" required>

            <div>

                <a href="../../Index.html"> Voltar </a>

                <button type="reset"> Limpar </button>

                <button type="submit"> Calcular </button>

            </div>

        </form>
        
    </body>

</html>