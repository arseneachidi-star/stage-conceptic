<?php
 // Le match
 $jours = 70;
echo match($jours){
     1 => "Lundi",
     2 => "Mardi",
     3 => "Mercredi",
     4 => "Jeudi",
     5 => "Vendredi",
     6 => "Samedidi",
     7 => "Dimanche",
     default =>" Jours inconnu",
};
?>