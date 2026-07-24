<?php
function factorrielle($n){
    $resultats = 1;
     for($i = 1; $i <= $n; $i++){
        $resultats *= $i ;


     }
    return $resultats;
    
}

echo factorrielle(5);


?>