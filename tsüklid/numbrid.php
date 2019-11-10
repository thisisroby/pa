<?php
//ridade ja veergude maksimum
$ridadeArv = 7;
$veergudeArv = 7;
//ridade määramine ja vahetus
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++) {
    echo $reaNumber;
    //veergude määramine ja vahetus
    for ($veeruNumber = 1; $veeruNumber <= $reaNumber; $veeruNumber++)
        if ($veeruNumber != $reaNumber) {
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        } else {
            echo '*';
        }
    echo '<br>';
}
?>