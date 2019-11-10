<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Ülesanne 2</title>
</head>
<body>

function celToFah(float $degrees)
{
return $degrees * 1.8 + 32;
}

function fahToCel(float $degrees)
{
return ($degrees - 32) / 1.8;
}

if (isset($_GET['cel'])) {
$cel = floatval($_GET['cel']);
$fah = celToFah($cel);
$fahMsg = "$cel &deg;C = $fah &deg;F";
}

if (isset($_GET['fah'])) {
$fah = floatval($_GET['fah']);
$cel = fahToCel($fah);
$celMsg = "$fah &deg;F = $cel &deg;C";
}

?>

//vorm andmete sisestamiseks
<form>
    C: <input type="number" name="cel">
    <input type="submit" value="Celsius -> Fahrenheit">
    <?php
    if (isset($fahMsg)) {
        echo $fahMsg;
    }
    ?>
</form>
<br>
// vorm andmete sisestamiseks
<form>
    F: <input type="number" name="cel">
    <input type="submit" value="Celsius -> Fahrenheit">
    <?php
    if (isset($celMsg)) {
        echo $celMsg;
    }
    ?>
</form>


// Ringi pindala ja ümbermõõdu leidmine