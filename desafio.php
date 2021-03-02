<?php
    $Numero01 = $_POST['um'];
    $Numero02 = $_POST['dois'];
    $Numero03 = $_POST['tres'];
    $Numero04 = $_POST['quatro'];
    $Numero05 = $_POST['cinco'];
    $soma = $Numero01 + $Numero02 + $Numero03 + $Numero04 + $Numero05;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    for ($i=0; $i<5; $i++){
        echo $Numero01 .' + '. $Numero02 .' + '. $Numero03 .' + '. $Numero04 .' + '. $Numero05 .' = '. $soma . '<br>';
    }
   ?>
</body>
</html>