<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contact@pierre-couverture-france.fr";
    $to = "ouragan-76@hotmail.fr";
    $subject = "Essai de PHP Mail";
    $message = "PHP Mail fonctionne parfaitement";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
   
</body>
</html>