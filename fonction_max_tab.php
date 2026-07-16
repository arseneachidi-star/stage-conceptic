<?php
 function maxTab($tab){
       $max = $tab[0];

       foreach($tab as  $valeur ){

        if ($max < $valeur){

            $max = $valeur;
        }

                    }
         return $max;
 }
    echo maxTab([5,3,8]);
?>