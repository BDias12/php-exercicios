<?php

function ValidaObrigatoriedade($idade, $genero, $reserva){


    if (($idade < 18 || $idade > 65) && ($genero == "M" || $genero == "F")){
        $relatorio = "Alistamento Indisponivel";
    } else if ($idade >= 18 && $idade <= 65 && $genero == "M"){
        
        if($reserva == "feito"){

            $reserva = "Reserva Ativa no Brasil";
            
            return $reserva;

        }
        
        $relatorio = "Alistamento Obrigatório";
        

    } else if ($idade >= 18 && $idade <= 65 && $genero == "F"){

        $relatorio = "Alistamento Opcional";

    }

    return $relatorio;

}

?>
