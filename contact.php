<?php
include('./php/index.php');
$numero = '';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Pierrot-Couverture-France entreprise dans les hauts-de-seine 92, Couverture, Isolation et autre</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/general/style-general.css" rel="stylesheet" />
        <link href="css/pages/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Retour à l'accueil</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Intervention d'Urgence</a></li>
                            <li class="nav-item"><a class="nav-link" href="./devis.php">Devis</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Services</a>
                                <ul class="nav-">
                                    <li><a href="fuite.html">Detection de fuite</a></li>
                                    <li><a href="ravalement.html">Ravalement</a></li>
                                    <li><a href="maconnerie.html">maçonnerie</a></li>
                                    <li><a href="entretien.html">Entretien & Nettoyage</a></li>
                                    <li><a href="couverture.html">Couverture</a></li>
                                    <li><a href="toiture.html">Toiture</a></li>
                                    <li><a href="zinguerie.html">Zinguerie</a></li>
                                    <li><a href="isolation.html">Isolation</a></li>
                                </ul>
                            
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Formulaire de contact</h1>
                            <p class="lead fw-normal text-muted mb-0">Que pouvons-nous faire pour vous ?</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" method = 'POST' action=''>
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Nom complet <?php echo $etoileNom; ?></label>
                                        <?php echo $messageErreurNom; ?>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">E-mail <?php echo $etoileEmail; ?></label>
                                            <?php echo $messageErreurEmail; ?>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">E-Mail non valide.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="+33" data-sb-validations="required" />
                                        <label for="phone">Telephone <?php echo $etoileTelephone; ?></label>
                                        <?php echo $messageErreurTelephone; ?>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="message" id="message" type="text" placeholder="Entrer votre message..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Message <?php echo $etoileMessage; ?></label>
                                        <?php echo $messageErreurMessage; ?>
                                    </div>
                                    <?php echo $messageErreur; ?>

                                    
                                    
                                </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><input type="submit" name="envoyer" id="envoyer" value="Envoyer"></div>    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                            <div class="h5 mb-2">Parlons de vos projets</div>
                            <p class="text-muted mb-0">Nos spécialistes vous guiderons au mieux afin de réaliser vos projets.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5">Des spécialistes à votre écoute</div>
                            <p class="text-muted mb-0">Eclaircissons ensembles vos zones d'ombres, nous nous engageons à vous suivre jusqu'à la fin des travaux.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                            <div class="h5">Une question ?</div>
                            <p class="text-muted mb-0">N'Hésitez pas à nous contacter, nous y répondrons avec plaisir</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5">Appelez nous</div>
                            <p class="text-muted mb-0">Contactez nous au ...</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./js/pages/scripts.js"></script>
        <!-- Confirmation message -->
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>