<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'Visitez Le Mexique';?>
    <?php include 'title.php';?>
    <?php echo $title; ?>-<?php echo $pageTitle ; ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("navbar.php");?>

<section class="about-section">
 <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
   <div class="mb-3">
   <h1 class="animate__animated animate__fadeInUp text-uppercase font-weight-bold display-3">Visitez Le Mexique</h1>
   </div>
 </div>
 </div>
</section>
<div class="container section-padding mt-3 p-3 pb-5">
    <div class="row mb-5">
        <!-- Image Section -->
        <div class="col-md-6 col-sm-12 mb-3">
            <img src="image/sejour_mexique.jpg" alt="Découvrez les Trésors Culturels du Mexique" class="img-fluid img-info">
        </div>

        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-3">Découvrez les trésors culturels du Mexique</h4>
                <p class="description-text">
                Plongez dans l'histoire et la richesse culturelle du Mexique en visitant ses sites archéologiques, musées et villes coloniales. Explorez les pyramides majestueuses de Teotihuacan, émerveillez-vous devant les fresques murales de Diego Rivera à Mexico, et promenez-vous dans les rues pavées de Guanajuato. Chaque destination offre une fenêtre sur le passé fascinant du Mexique, où les traditions ancestrales rencontrent l'art et l'architecture modernes.
                </p>
                <a href="contact.php" class="submit_btn mb-3">Nous Contactez</a>
            </div>
        </div>
    </div>


    <div class="row mb-5">
       
        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-3">Évadez-vous dans les paradis naturels du Mexique</h4>
                <p class="description-text">
                Laissez-vous envoûter par les paysages naturels diversifiés du Mexique, allant des plages paradisiaques aux forêts tropicales luxuriantes. Détendez-vous sur les plages de sable blanc de Cancún, explorez les cénotes mystérieux de la péninsule du Yucatán, ou randonnez à travers les montagnes de la Sierra Madre. Que vous soyez amateur de farniente ou d'aventure, le Mexique offre des expériences inoubliables pour tous les goûts et toutes les envies.
                </p>
                <a href="contact.php" class="submit_btn mb-3">Nous Contactez</a><br><br>
            </div>
        </div>

         <!-- Image Section -->
         <div class="col-md-6 col-sm-12 mb-5">
            <img src="image/visite_mexique.jpg" alt="Évadez-vous dans les Paradis Naturels du Mexique" class="img-fluid img-info">
        </div>

    </div>

</div>


        

<?php include("footer.php");?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/css-animations.js/0.1.0/css-animations.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>