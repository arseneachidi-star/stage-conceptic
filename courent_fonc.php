<?php

// Fonction courante sur les Tableaux

$nombres = [2, 50, 20, 75, 7];

// array_map permet d'apliquer une fonction a chaque élément du  tabaleau

$somme = array_map( fn ($n) => $n * $n,$nombres);

    print_r($somme);

    //array_sum permet de faire la somme des élements qui figurent dans un tableau

   $total = array_sum($nombres)/ count($nombres);
    echo "Moyenne :" . round($total, 2);

    echo "</br>";
    //array_filter permet de fitrer les éléments dans tabaleau sous sertaines condictions.
    
    $filtrer = array_filter( $nombres ,fn($n) => $n % 2 === 0);
    print_r($filtrer);

?>