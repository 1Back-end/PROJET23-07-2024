<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'Services USA';?>
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
<?php include("navbar.php");?>

<section class="about-section">
 <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
   <div class="mb-3">
   <h1 class="animate__animated animate__fadeInUp text-uppercase font-weight-bold display-3">Services des USA</h1>
   </div>
 </div>
 </div>
</section>



<div class="container section-padding mt-3 pb-5 p-3">
<div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12 ">
                <p class="small text-center">Explorez les États-Unis avec notre approche personnalisée, offrant des conseils experts et un soutien continu pour garantir un séjour inoubliable et parfaitement adapté à vos besoins</p>
            </div>
        </div>


        <div class="row">
            <!-- Sécurité et Confiance -->
            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card-box  p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <span class="icon-bg"><i class="fas fa-cogs"></i></span>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase fw-bold">Visitez les USA</h5>
                    </div>
                    <div class="mb-3">
                        <p class="small text-muted">
                        Découvrez l'Amérique avec <b>World Travel Company</b> : des gratte-ciels de New York aux plages de Californie, vivez des expériences uniques et mémorables. Embarquez pour un voyage sur mesure à travers les États-Unis et transformez vos rêves en réalité !
                        </p>
                    </div>
                    <div class="mb-3">
                    <a href="visiter_usa.php" class="btn-services animate__animated animate__fadeInUp">Plus d'infos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card-box p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <span class="icon-bg"><i class="fas fa-cogs"></i></span>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase fw-bold">Travaillez aux USA</h5>
                    </div>
                    <div class="mb-3">
                        <p class="small text-muted">
                        Réalisez vos rêves professionnels aux États-Unis avec <b>World Travel Company</b> : bénéficiez de notre expertise pour des opportunités de carrière uniques et un accompagnement personnalisé. Transformez votre ambition en succès sur le sol américain !
                        </p>
                    </div>
                    <div class="mb-3">
                    <a href="travailler_usa.php" class="btn-services animate__animated animate__fadeInUp">Plus d'infos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card-box p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <span class="icon-bg"><i class="fas fa-cogs"></i></span>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase fw-bold">Etudiez aux USA</h5>
                    </div>
                    <div class="mb-3">
                        <p class="small text-muted">
                        Explorez les meilleures opportunités éducatives aux États-Unis avec <b>World Travel Company</b> : bénéficiez de notre expertise pour un accompagnement personnalisé vers une carrière internationale réussie. Transformez votre avenir académique avec nous !
                        </p>
                    </div>
                    <div class="mb-3">
                    <a href="etudier_usa.php" class="btn-services animate__animated animate__fadeInUp">Plus d'infos</a>
                    </div>
                </div>
            </div>           
</div>        
</div>

<?php include("footer.php");?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/css-animations.js/0.1.0/css-animations.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>