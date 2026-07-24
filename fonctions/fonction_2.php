<?php

function  somme($n, $b){
    
      $somme = $n + $b;

    if( $somme >= 10) {
        echo "Vous avez réuissir";
    } else 
       echo "Vous avez échouer";

   
           return $somme;

}
echo somme(0, 8);
?>