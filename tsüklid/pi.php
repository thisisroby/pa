<?php
$kord = 1;
$kordMax = 1000;
$summa = 0;
while($kord <= $kordMax) {
    $element = 1 / (2 * $kord - 1);
    $jaak = $kord % 2;
    if($jaak == 0) {
        $summa = $summa - $element;
    } else {
        $summa = $summa + $element;
    }
    $kord++;
}
$pi = $summa * 4;
echo $pi;
echo $pi.'<br>';
