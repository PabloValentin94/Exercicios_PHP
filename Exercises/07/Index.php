<?php

    if(isset($_POST["lista_numeros"]))
    {

        $numeros = explode(",", $_POST["lista_numeros"]);

        $media_simples = 0;

        for($i = 0; $i < count($numeros); $i++)
        {

            $numeros[$i] = (int) $numeros[$i];

            $media_simples += $numeros[$i];

        }

        $media_simples /= count($numeros);

        $elementos = "";

        for($i = 0; $i < count($numeros); $i++)
        {

            $elementos .= strval($numeros[$i]);

            if($i < count($numeros) - 1)
            {

                $elementos .= ",";

            }

        }

        echo("<script> alert('Números digitados: $elementos.'); </script>");

        echo("<script> alert('Média simples dos números digitados: $media_simples.'); </script>");

    }

    include "./Page.php";

?>