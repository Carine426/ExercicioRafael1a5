<?php
 
function verificarNome(array $vetorNomes, $nomeEspecifico){
 
    foreach($vetorNomes as $nome){
        if($nome == $nomeEspecifico){
            return true;
        }
     
        }
 
        return false;
    }
 
$nomes = ["Carine", "Carol", "Thamires"];
 
if(verificarNome($nomes, "Carine")){
    echo "Carine esta na lista";
}else{
     echo "Carine não esta na lista";
}
 
?>