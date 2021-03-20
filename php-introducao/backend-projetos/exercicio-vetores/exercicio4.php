<?php
    $listaDeNomes = array (
        1 => "Carine",
        2 => "Gabrielly",
        3 => "Carol",
        4 => "Amanda",
    );

    $nomes = "Carine";

    function apaga_vetor($listaDeNomes, $nomes){
        foreach ($listaDeNomes as $key => $nomeLista){
            if($nomeLista == $nomes){
                echo "Encontrado <br>";
                unset ($listaDeNomes[$key]);
                print_r ($listaDeNomes);
                return $listaDeNomes;
            }
            else {
                echo "False";
                return $listaDeNomes;
            }
        }
    }

    apaga_vetor($listaDeNomes, $nomes);
    
