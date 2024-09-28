<?php

    if(isset($_POST["data_inserida"]))
    {

        $componentes_data = explode("/",$_POST["data_inserida"]);

        $limites_meses = [

            "01" => 31,
            "02" => (date("L", mktime(0, 0, 0, $componentes_data[1], $componentes_data[0], $componentes_data[2]))) ? 29 : 28,
            "03" => 31,
            "04" => 30,
            "05" => 31,
            "06" => 30,
            "07" => 31,
            "08" => 31,
            "09" => 30,
            "10" => 31,
            "11" => 30,
            "12" => 31

        ];

        $resultado = "";

        if(strlen($componentes_data[0]) != 2 || strlen($componentes_data[1]) != 2 || strlen($componentes_data[2]) != 4)
        {

            $resultado = "Formato de data inválido! Corrija para o formato dd/mm/yyyy.";

        }

        else if((int) $componentes_data[1] > 12 || (int) $componentes_data[1] <= 0)
        {

            $resultado = "A data inserida é inválida! Verifique se o mês inserido realmente existe.";

        }

        else if((int) $componentes_data[0] > $limites_meses[$componentes_data[1]] || (int) $componentes_data[0] <= 0)
        {

            $resultado = "A data inserida é inválida! Verifique se o dia inserido é maior que zero " .
                         "e se não ultrapassa o valor máximo de seu respectivo mês.";

        }

        else
        {

            $resultado = "A data inserida (" .$_POST["data_inserida"] . ") é válida.";

        }

        echo("<script> alert('$resultado'); </script>");

        include "./Page.php";

    }

?>