<?php
 function minTab( $tab){
  $min = $tab[0];

       foreach($tab as $valeur){
        if($min > $valeur){

            $min = $valeur;
        }

       }

         return $min ;
 }
          echo minTab ([30,2, 50]);
          ?>