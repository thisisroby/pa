<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Täringud</title>
</head>
<body>
<H3>täringud</H3>

<form action="" method="POST">
    <input type="submit" name="submit" value="Veereta" >
</form> <br>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    taringuvise();
}
'<br>';
function taringuvise() {
    echo rand(1,6);
}
?>