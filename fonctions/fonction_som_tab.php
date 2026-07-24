<?php

function somTab($tab){
 $somme = 0;
 
       foreach( $tab as $valeur){
        $somme += $valeur ;
       }

     return $somme ;

}

 echo somTab([2, 5, 6, 8]);
?>