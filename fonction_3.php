<?php

function  somme($b){
    for($i = 1; $i <= 10; $i++){
      echo  "$i x $b = " . ($i * $b) . "</br>" ;
    }

}

   somme(8);
?>