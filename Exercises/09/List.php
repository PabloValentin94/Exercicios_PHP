<?php

    if(isset($_POST["lista_palavras"]))
    {

        $palavras = explode(",", $_POST["lista_palavras"]);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="../../Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="./List.css">

        <title> Exercício 09 </title>

    </head>

    <body>

        <?php if(isset($palavras)): ?>

            <fieldset>

                <legend> Listagem de Palavras </legend>

                <table>

                    <thead>

                        <tr>

                            <th> Palavra </th>
                            <th> Quantidade de Caracteres </th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($palavras as $palavra): ?>

                            <tr>

                                <td> <?= $palavra ?> </td>
                                <td> <?= strlen($palavra) ?> caractere(s) </td>

                            </tr>

                        <?php endforeach ?>

                    </tbody>

                </table>
            
            </fieldset>

        <?php else: ?>

            <h1> Não há o que exibir. </h1>

        <?php endif ?>

        <a href="./Page.php"> Voltar </a>
        
    </body>

</html>