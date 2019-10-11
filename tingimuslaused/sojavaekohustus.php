<?php
$kodakontsus = 'eestlane';
$vanus = 18;
$haridus = 'kutseharidus';
// kas oled eestlane
if ($kodakontsus == 'eestlane'){
    // siis saab juba edasi kontrollida
    if($vanus >= 18){
        // oled piisavalt vana
        // vaatame mis on su haridus
        if ($hairuds == 'pohiharidus' or $haridus == 'keskharidus' or $haridus == 'kutseharidus'){
            //hairudstase on sobilik
            echo 'Haridustase sobib<br>';
            echo 'Oled valmis sojavaekohustuseks<br>';
        }
    } else {
        // liiga noor
    }
} else {
    // valiskodanikud Eestit ei kaitse
    echo 'Riigiseadus ei kohusta sojavaekohustuseks<br>';
}