<?php
function nombPair($n){
      if($n % 2 ===0){
        return " $n est un  nombre  pair";
      } else 
      return "$n est nombre impair";

}
echo nombPair(23);
?>