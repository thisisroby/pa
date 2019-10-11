<?php
// defineerime arvu
$etteAntud = 20;
// Lubame kasutajale arvata
$kasutajaArv = 35;
// Hakkame võrdlema
if($etteAntudArv == $kasutajaArv){
    // arvud on vordsed, seega arvasid ara
    echo 'Tubli! Arvasid ara';
} else {
    // arvud ei ole vordsed
    // kas vahemik ette antud ja kasutaja arvude vahel on vaiksem voi vordne 5-ga
    $vahemik = $kasutajaArv - $etteAntudArv;
    if($vahemik <=5) {
        // julgestame, et on juba tulemus lahedal
        echo 'Veel ei arvanud ara, aga juba hasti lahedal'
    }
}