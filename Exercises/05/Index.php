<?php

    /*

        Palíndromo: qualquer palavra, frase, data, etc... que lida de trás
        para frente, continua igual, ou seja, com a mesma leitura e pronúncia.

    */

    if(isset($_POST["texto"]))
    {

        $texto = $_POST["texto"];

        $qnt_caracteres = strlen($_POST["texto"]);

        $condicao = true;

        for($i = 0; $i < floor($qnt_caracteres / 2); $i++)
        {

            $comparacoes = [strtolower($texto[$i]), strtolower($texto[$qnt_caracteres - 1 - $i])];

            if($comparacoes[0] != $comparacoes[1])
            {

                $condicao = false;

                break;

            }

        }

        $resultado = ($condicao) ? "é" : "não é";

        echo("<script> alert('O texto $texto $resultado um palíndromo.'); </script>");

    }

    include "./Page.php";

?>