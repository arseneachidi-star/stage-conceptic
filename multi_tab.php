<?php

//Tableau mutidimentionnel
$fruits = [
     
            ["nom"  => "Ordinateur", "prix" => "5000"],
            ["nom" =>  "Orange" , "prix" => "500"   ],
    
                      ];
        foreach($fruits as $fruits)

    echo  $fruits["nom"]. ":"    . $fruits["prix"].  "FCFA </br> </br>";

?>