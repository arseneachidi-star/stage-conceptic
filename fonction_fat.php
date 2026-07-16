<?php
 function factorielle($n) {
    $resultats = 1;
    for($i= 1; $i <= $n ; $i++){
        $resultats *= $i;
    }

    return $resultats;
 }

 echo factorielle(5);
?>