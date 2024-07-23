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




<div class="container section-padding mt-3 pb-5 p-3">
<div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12 ">
                <h2 class="animate__animated animate__fadeIn">Nos Valeurs</h2>
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


<?php include("section_faq.php");?>



<div class="container pb-5 mt-3 p-3">
<div class="row text-center mb-4">
        <div class="col-md-12 col-sm-12">
            <h2 class="animate__animated animate__fadeIn">Nos partenaires</h2>
            <p class="small text-center">Chez <b>World Travel Company</b>, nous collaborons avec des partenaires de confiance <br> pour vous offrir des expériences de voyage exceptionnelles. </p>
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