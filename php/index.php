<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "oura6@hotmail.fr";

mail($recipient, $phone, $message, $mailheader) or die("Error!");



echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="sucess" id="submitSuccessMessage">
    <div class="text-center mb-3">
        <div class="fw-bolder">Formulaire envoyé avec succés, nous reviendrons vers vous dans les plus bref délais</div>
    </div>
</div>
        <p class="back">Go back to the <a href="index.html">Retour au menu principal</a>.</p>
        
    </div>
</body>
</html>



';


?>
