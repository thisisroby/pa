<?php
// defineerime arv ette
$etteAndtudArv = 20;
// lubame kasutajale arvata
$kasutajaArv = 20;
// hakkame võrdlema
if($etteAndtudArv == $kasutajaArv){
    // arvud on võrdsed, seega arvasid ära
    echo 'Tubli! Arvasid ära!<br>';
    echo 'Arv on '.$kasutajaArv.'<br>';
} else {
    // arvud EI OLE võrdsed
    // kas vahemik ette antud ja kasutaja arvude vahel on
    // väiksem või võrdne 5-ga
    // kui arvud on negatiivsed, siis teisendame vahemiku
    // leidmiseks posiitiivseteks arvudeks
    $vahemik = abs($kasutajaArv - $etteAndtudArv);
    if($vahemik <= 5){
        // jugestame, et on juba tulemus lähedal
        echo 'Veel ei arvanud ära, aga juba hästi lähedal<br>';
    }
    if($kasutajaArv > $etteAndtudArv) {
        // kasutaja pakkumine on suurem kui ette antud
        echo $kasutajaArv.' on suurem, kui ette antud arv<br>';
    } else {
        // kasutaja pakkumine on väiksem kui ette antud
        echo $kasutajaArv.' on väiksem, kui ette antud arv<br>';
    }
}