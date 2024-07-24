<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'À Propos';?>
    <?php include 'title.php';?>
    <?php echo $title; ?>-<?php echo $pageTitle ; ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- International Telephone Input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/css/intlTelInput.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Menu -->
    
<?php include_once("navbar.php");?>



<?php include_once("about_section.php");?>






<div class="container pb-5 mt-3 p-3">
        <div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12">
                <h2 class="animate__animated animate__fadeIn">Nos destinations</h2>
                
            </div>
        </div>
        <div class="row">
            <!-- Carte pour le Canada -->
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card h-100 p-3 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/1200px-Flag_of_Canada.svg.png" class="card-img-top" alt="Drapeau du Canada">
                    <div class="card-body">
                        <h5 class="card-title">Canada</h5>
                        <p class="text-muted">Explorez les vastes paysages et les villes dynamiques du Canada, de Vancouver à Toronto.</p>
                        <a href="services_canada.php" class="btn-services animate__animated animate__fadeInUp">Plus d'infos</a>
                    
                    </div>
                </div>
            </div>
            <!-- Carte pour les USA -->
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card h-100 p-3 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1200px-Flag_of_the_United_States.svg.png" class="card-img-top" alt="Drapeau des USA">
                    <div class="card-body">
                        <h5 class="card-title">USA</h5>
                        <p class="text-muted">Découvrez les États-Unis avec ses merveilles naturelles et ses grandes villes comme New York et Los Angeles.</p>
                        <a href="services_usa.php" class="btn-services animate__animated animate__fadeInUp">Plus d'infos</a>
                    
                    </div>
                </div>
            </div>
            <!-- Carte pour le Mexique -->
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card h-100 p-3 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/1200px-Flag_of_Mexico.svg.png" class="card-img-top" alt="Drapeau du Mexique">
                    <div class="card-body">
                        <h5 class="card-title">Mexique</h5>
                        <p class="text-muted">Profitez des plages ensoleillées et des richesses culturelles du Mexique, de Cancún à Mexico.</p>
                        <a href="services_mexique.php" class="btn-services animate__animated animate__fadeInUp">Plus d'infos</a>
                    
                    </div>
                </div>
            </div>
           
        </div>
    </div>

<div class="container section-padding mt-3 pb-5 p-3">
<div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12 ">
                <h2 class="animate__animated animate__fadeIn">Nos valeurs</h2>
                <p class="small text-center">Chez <b>World Travel Company</b>, nos valeurs fondamentales guident chaque aspect de notre travail, <br> nous permettant de fournir des services exceptionnels à nos clients.</p>
            </div>
        </div>


        <div class="row">
            <!-- Sécurité et Confiance -->
            <div class="col-md-3 col-sm-12 mb-4">
                <div class="card p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <i class="fa fa-star fa-2x mb-3"></i>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase">Excellence</h5>
                    </div>
                    <div>
                        <p class="small">
                        Nous nous efforçons d'offrir des services de la plus haute qualité, dépassant les attentes de nos clients à chaque voyage.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 mb-4">
                <div class="card p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <i class="fa fa-users fa-2x  mb-3"></i>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase">Intégrité</h5>
                    </div>
                    <div>
                        <p class="small">
                        Nous agissons toujours avec honnêteté et transparence, construisant des relations de confiance avec nos clients et partenaires.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 mb-4">
                <div class="card p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <i class="fa fa-lightbulb fa-2x mb-3"></i>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase">Innovation</h5>
                    </div>
                    <div>
                        <p class="small">
                        Nous innovons constamment pour offrir des solutions de voyage modernes et efficaces, améliorant l'expérience de nos clients.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 mb-4">
                <div class="card p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <i class="fa fa-heart fa-2x mb-3"></i>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase">Service Client</h5>
                    </div>
                    <div>
                        <p class="small">
                        Nous mettons nos clients au cœur de tout ce que nous faisons, offrant un service personnalisé et attentif pour répondre à leurs besoins uniques.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>



<?php include("footer.php");?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/css-animations.js/0.1.0/css-animations.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



</body>
</html>
</div>