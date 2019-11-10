<?php
//Kolmnurk
function arvuta ($a, $b){
    $c = round(sqrt(pow($a,2) + pow($b,2)));
    return "Külg C on " .$c.".";
}
echo arvuta(5,3);
?>