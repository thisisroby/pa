<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artimeetilised muutujad</title>
<style>
    th, td, table {
        padding: 5px;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    th {
        background-color: orange;
        width: 100px;
    }
</style>
</head>
<body>

</body>
</html>

<?php
// muutujate defineerimine
$x = 8;
$y = 2;
// aritmeetilised operaatorid
$liitmine = $x + $y;
$lahutamine = $x - $y;
$korrutamine = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;
// tabeli väljastamine
echo
'<table>
  <!--tabeli päis-->
  <table>
    <tr>
        <th>Operaator</th>
        <th>Nimetus</th>
        <th>Näide</th>
        <th>Tulemus</th>
    </tr>
  <!--tabeli keha-->
  <tr>
    <!--liitmine-->
        <td>x+y</td>
        <td>liitmine</td>
        <td>'.$x.' + '.$y.'</td>
        <td>'.$liitmine.'</td>
  </tr>  
  <tr>
    <!--lahutamine-->
        <td>x-y</td>
        <td>lahutamine</td>
        <td>'.$x.' - '.$y.'</td>
        <td>'.$lahutamine.'</td>
  </tr>
  <tr>
    <!--korrutamine-->
        <td>x*y</td>
        <td>korrutamine</td>
        <td>'.$x.' * '.$y.'</td>
        <td>'.$korrutamine.'</td>
  </tr>
    <!--jääk-->
  <tr>      
        <td rowspan="2">x%y</td>
        <td rowspan="2">jääk</td>
        <td>'.$x.' % '.$y.'</td>
        <td>'.$jaak.'</td>
  </tr>    
  <tr>
        <td>5 % 2</td>
        <td>'.(5 % 2).'</td>
  </tr>  
</table>';