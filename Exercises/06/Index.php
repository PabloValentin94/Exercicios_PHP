<?php

    if(isset($_POST["numero"]))
    {

        $numero = (int) $_POST["numero"];

        if($numero >= 0)
        {

            $fatorial = 1;

            if($numero > 1)
            {

                $fatorial = $numero;

                $expressao = "$numero";

                while(true)
                {

                    $numero--;

                    if($numero > 0)
                    {

                        $fatorial *= $numero;
            
                        $expressao .= " X $numero";

                    }

                    else
                    {

                        $fatorial = number_format($fatorial, 0, ",", ".");

                        $expressao .= " = $fatorial";

                        break;

                    }

                }

                echo("<script> alert('Expressão: " . $_POST["numero"] .  "! = $expressao'); </script>");

            }

            echo("<script> alert('" . "O fatorial de " . $_POST["numero"] . " é: $fatorial" . "'); </script>");

        }

        else
        {

            echo("<script> alert('Somente números redondos e maiores ou iguais a zero são permitidos.'); </script>");

        }

    }

    include "./Page.php";

?>