<?php 
#messages d'erreurs (ou non) globaux.
$messageErreur = '';
$messageSucces = '';
#Message d'erreur des inputs.
$messageErreurNom = '';
$messageErreurEmail = '';
$messageErreurTelephone = '';
$messageErreurMessage = '';
#etoile en rouge
$etoileNom = '';
$etoileEmail = '';
$etoileTelephone = '';
$etoileMessage = '';

    if(isset($_POST['envoyer'])){
        #initialisations des variables
        $nom = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $telephone = htmlentities($_POST['phone']);
        $message = htmlentities($_POST['message']);
        
        $mailheader = "From:".$nom."<".$email.">\r\n";
        $recipient = "oura6@hotmail.fr";
        /*** mail($recipient, $telephone, $message, $mailheader) or die("Error!"); ***/

        if(!empty($nom)){
            #ton code pour dire que c'est validé
        }else{
            #L'utilisateur n'a rien ecris dans l'input. 
            $messageErreurNom = '<div class="danger" id="submitErrorMessage"><div class="text-center text-danger mb-3">Vous n\'avez pas entré de nom!</div></div>'; 
            $etoileNom = '<span style="color:red;"> *</span>';
        }

        if(!empty($email)){
            #ton code pour dire que c'est validé
        }else{
            #L'utilisateur n'a rien ecris dans l'input. 
            $messageErreurEmail = '<div class="danger" id="submitErrorMessage"><div class="text-center text-danger mb-3">Vous n\'avez pas entré d\'email!</div></div>';
            $etoileEmail = '<span style="color:red;"> *</span>';
        }

        if(!empty($telephone)){
            #ton code pour dire que c'est validé
        }else{
            #L'utilisateur n'a rien ecris dans l'input.
            $messageErreurTelephone = '<div class="danger" id="submitErrorMessage"><div class="text-center text-danger mb-3">Vous n\'avez pas entré de numéro !</div></div>';
            $etoileTelephone = '<span style="color:red;"> *</span>';
        }

        if(!empty($message)){
            #ton code pour dire que c'est validé
          $messageErreur = '<div class="sucess" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Formulaire envoyé avec succés, nous reviendrons vers vous dans les plus bref délais</div>
                </div>
            </div>';
        }else{
          $messageErreur = '<span style="color:red;">Erreur d\'envoi !</span>';
            #L'utilisateur n'a rien ecris dans l'input.
            $messageErreurMessage = '<div class="danger" id="submitErrorMessage"><div class="text-center text-danger mb-3">Vous n\'avez pas entré de message !</div></div>';
            $etoileMessage = '<span style="color:red;"> *</span>';
        }

        
    }

?>

