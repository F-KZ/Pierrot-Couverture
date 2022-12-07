<?php 


$name - $_POST['name'];
$email - $_POST['email'];
$phone - $_POST['phone']
$message - $_POST['message']

$mailheader - "From:".$name."<".$email.">\r\n";

$recipient - "ouragan-76@hotmail.fr";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
    <h1>
        merci de votre confiance
    </h1>
    <p class="back">Accueil<a href="index.html"></a></p>


</div>>
</body>
';

?>