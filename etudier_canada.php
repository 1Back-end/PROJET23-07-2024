<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'Etudiez au Canada';?>
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
   <h1 class="animate__animated animate__fadeInUp text-uppercase font-weight-bold display-3">Etudiez canada</h1>
   </div>
 </div>
 </div>
</section>
<div class="container section-padding mt-3 p-3 pb-5">
    <div class="row mb-5">
        <!-- Image Section -->
        <div class="col-md-6 col-sm-12 mb-3">
            <img src="image/Etude1.jpg" alt="Étudiez au Canada : Une Opportunité académique inégalée et un avenir prometteur." class="img-fluid img-info">
        </div>

        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-3">Étudiez au Canada : Une Opportunité académique inégalée.</h4>
                <p class="description-text">
                Découvrez l'excellence académique et la diversité culturelle du Canada avec nos services d'accompagnement spécialisés pour étudiants internationaux. Le Canada est renommé pour ses établissements d'enseignement de classe mondiale, ses environnements sécurisés et inclusifs, et ses opportunités de recherche innovantes. Nous vous guidons à chaque étape de votre parcours éducatif, de la sélection des programmes à la demande de visa, en passant par l'intégration dans votre nouvelle communauté. 
                </p>
                <a href="contact.php" class="submit_btn mb-3">Nous Contactez</a>
            </div>
        </div>
    </div>


    <div class="row mb-5">
       
        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-3">Études au Canada : Votre passerelle vers un futur rayonnant</h4>
                <p class="description-text">
                Embarquez pour une aventure académique inoubliable au Canada, un pays où l'éducation de haut niveau rencontre une richesse culturelle exceptionnelle. Nos services personnalisés vous offrent un accompagnement complet pour naviguer dans le système éducatif canadien, depuis le choix de l’établissement jusqu’à l’obtention de votre visa étudiant. Explorez des programmes variés dans des universités réputées mondialement, tout en profitant d'un environnement multiculturel accueillant.
                </p>
                <a href="contact.php" class="submit_btn mb-3">Nous Contactez</a><br><br>
            </div>
        </div>

         <!-- Image Section -->
         <div class="col-md-6 col-sm-12 mb-5">
            <img src="image/Etude2.jpg" alt="Études au Canada : Votre Passerelle vers un Futur Rayonnant et Multiculturel" class="img-fluid img-info">
        </div>

    </div>

</div>


        

<?php include("footer.php");?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/css-animations.js/0.1.0/css-animations.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>