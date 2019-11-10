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
            padding: 5px
        }
        th {
            background-color:#fc0;
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
$x=8;
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
            <th>Operaator</th>
            <th>Nimetus</th>
            <th>Näide</th>
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
            <td rowspan="2">x % y</td>
            <td rowspan="2">Jääk</td>
            <td>'.$x.' % '.$y.'</td>
            <td>'.$jaak.'</td>           
        </tr>
            <td>5 % 2</td>
            <td>'.(5 % 2).'</td>
    </tbody>
</table>';
?>