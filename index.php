<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cyberphiles;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_POST['envoyer le message'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $message = $_POST['message'];

    $sql = ("INSERT INTO client('nom', 'email', 'numero', 'message') VALUES (?, ?, ?, ?)");
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CyberPhiles</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <div class="mainloader">
        <div class="spinner">
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">A propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">BIENVENUE A CYBERPHILES</div>
            <div class="masthead-heading text-uppercase">CRÉER, DIGITALISER & AUTOMATISER
                VOTRE BUSINESS</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">VOIR LES SERVICES</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Les Services Cyberphiles</h2>
                <h3 class="section-subheading text-muted">NOTRE FONCTIONNEMENT.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">SITE INTERNET</h4>
                    <p class="text-muted">À chaque création de site web son objectif commercial : attirer et qualifier
                        des prospects , valoriser votre image, promouvoir vos produits et services, s’ouvrir à
                        l’international, créer du trafic en magasin et/ou vendre en ligne, suivre l’internaute partout
                        et tout le temps…</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Acquisition de trafic/ Publicités en ligne</h4>
                    <p class="text-muted">Nous désignons l’ensemble des moyens disponibles pour améliorer votre
                        visibilité et générer du trafic qualifié sur votre site et/ou votre point de vente.
                        Nos stratégie d’acquisition garantissent à votre marque une visibilité non négligeable avec un
                        ROI garanti.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Community Management/Création de contenu</h4>
                    <p class="text-muted">Réussir à engager sa communauté, générer de la conversation et augmenter la
                        notoriété de sa marque sont devenus le graal pour toute entreprise sur les réseaux sociaux.
                        C’est la raison pour laquelle l’équipe de Cyberphiles met en place une stratégie de contenus en
                        adéquation avec votre marque.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- A propos-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Notre collaboration en 4 étape</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Étape 1</h4>
                            <h4 class="subheading">Élaboration</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Nous réfléchissons à la meilleure stratégie à adopter pour vous.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Etape 2</h4>
                            <h4 class="subheading">Mise en place</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Nous réfléchissons à la meilleure stratégie à adopter pour vous.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Etape 3</h4>
                            <h4 class="subheading">Optimisation</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Nous suivons des DATA afin d'en tirer le maximum de bénéfice.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Etape 4</h4>
                            <h4 class="subheading">Reporting</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Notre équipe analyse les opportunités de croissances profitables pour
                                vous.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Faites partie
                            <br />
                            de notre
                            <br />
                            histoire!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nous Contacter</h2>
                <h3 class="section-subheading text-muted">Parlez nous de votre projet.</h3>
            </div>

            <form id="contactForm" data-sb-form-api-token="bb2670d3-68af-42da-8774-28c17b30aea1">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Votre Nom *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Votre Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un Email est requis.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">L'email n'est pas valide.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Votre Numéro *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro est requis.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Votre Message *"
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Soumission du formulaire réussie!</div>

                    </div>
                </div>

                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Erreur lors de l'envoi du message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Envoyer le message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; CyberPhiles 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Politique de confidentialité</a>
                    <a class="link-dark text-decoration-none" href="#!">Conditions d'utilisation</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>