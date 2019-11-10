<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jagamine</title>
</head>
<body>
<H3>jagamine</H3>

<form action="" method="GET">
    esimene arv <input type="text" name="arv1"><br><br>
    teine arv <input type="text" name="arv2"><br><br>
    <input type="submit" name="submit" value="jaga" >
</form>
<?php
if( isset($_GET['submit']) ) {
    $arv1 = htmlentities($_GET['arv1']);
    $arv2 = htmlentities($_GET['arv2']);
    $vastus = $arv1 / $arv2;
    if($arv2 == 0) {
        echo 'NULLIGA JAGAMINE ON KEELATUD';
    } else { if( isset($vastus) ) echo $vastus;
    }
}
?>