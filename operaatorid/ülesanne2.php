<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            text-align: center;
            width: 600px;
        }
        tr,td {
            border: 1px solid black;
            padding: 3px
        }
        th {
            background-color:red;
            color: white;
            border: 1px solid black;
            padding: 5px
        }
    </style>
</head>
<body>


<?php
/*
    PHP Operaatorid
    Rene Kasetalu
    Tartu KHK
*/
//muutujad
$x=3;
$y=2;
//aritmeetilised orperaatorid
$liitimine = $x + $y;
$lahutamine = $x - $y;
$korrutamine = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;
//tabeli väljastamine
echo
    '<table>
    <!-- tabeli päis-->
    <thead>
        
            <tr>
            <th>Valem</th>
            <th>Nimetus</th>
            <th>Tehe</th>
            <th>Tulemus</th>
            </tr>
        
    </thead>
    <!--tabeli keha-->
    <tbody>
        <tr>
        
            <td>x + y</td>
            <td>Liitmine</td>
            <td>'.$x.' + '.$y.'</td>
            <td>'.$liitimine.'</td>           
        </tr>
        
        <tr>
            <td>x - y</td>
            <td>Lahutamine</td>
            <td>'.$x.' - '.$y.'</td>
            <td>'.$lahutamine.'</td>           
        </tr>
        
         <tr>
            <td>x * y</td>
            <td>Korrutamine</td>
            <td>'.$x.' * '.$y.'</td>
            <td>'.$korrutamine.'</td>           
        </tr>
        
         <tr>
            <td>x / y</td>
            <td>Jagamine</td>
            <td>'.$x.' / '.$y.'</td>
            <td>'.$jagamine.'</td>           
        </tr>
        
         <tr>
            <td>x % y</td>
            <td>Jääk</td>
            <td>'.$x.' % '.$y.'</td>
            <td>'.$jaak.'</td>           
        </tr>
            
    </tbody>
</table>'.'<br>'.'<br>';
?>

Celsius -> Fahrenheit

<?php
//enteri vajutamisel toimub tehe
if($_POST){
    $celsius = $_POST['celsius'];
    //valem
    $fahrenheit = (9/5)*$celsius+32;
}
?>
<!-- vorm numbri sisestamiseks-->
<form action="" method="post">
    Sisesta Celsius: <input type="text" name="celsius" /><br />
    <?php
    if(isset($celsius)){
        echo "Fahrenheit = ".round($fahrenheit,2);
    }
    ?>
</form>
<br>
<br>
Ringi ümbermõõt ja pindala <br>
Ütleme, et ringi raadius on 30m:

<?php
define("MSG","Hi, everyone");
define("PI", 3.14159, true);
define("radius", 30);
$circum = 2 * pi * radius;
$area = PI * pow(radius, 2);
echo "<font color=#00f><h3>";
echo "Ringi ümbermõõt on :  ",$circum .' meetrit'."<br/>";
echo "Ringi pindala on : ", $area .' meetrit';
echo "<h3></font>";
?>