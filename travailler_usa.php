<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'Work in the USA';?>
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
   <h1 class="animate__animated animate__fadeInUp text-uppercase font-weight-bold display-3">Work in the USA</h1>
   </div>
 </div>
 </div>
</section>
<div class="container section-padding mt-3 p-3 pb-5">
    <div class="row mb-5">
        <!-- Image Section -->
        <div class="col-md-6 col-sm-12 mb-3">
            <img src="image/travailler_usa.jpg" alt="Opportunités de Carrière Inégalées" class="img-fluid img-info">
        </div>

        <!-- Text Section -->
        <div class="col-md-6 col-sm-12  mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-3">Unparalleled career opportunities</h4>
                <p class="description-text">
                With <b>World Travel Company</b>, access unique career opportunities in the United States. Whether you are a recent graduate or an experienced professional, we help you find the ideal position in your field. Take advantage of our network of partners and our expertise to navigate the American job market and achieve your professional goals. Turn your aspirations into reality and build a successful career on American soil.
                </p>
                <a href="contact.php" class="submit_btn mb-3">Contact us</a>
            </div>
        </div>
    </div>


    <div class="row mb-5">
       
        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-3">Personalized support for your professional project.</h4>
                <p class="description-text">
                We understand that working in the United States can be a challenge, which is why <b>World Travel Company</b> offers you personalized support every step of the way. From preparing your visa to integrating into your new work environment, we guide you throughout the process. Our advisors are here to provide you with practical advice and essential resources to ensure a smooth transition and a rewarding professional experience.
                </p>
                <a href="contact.php" class="submit_btn mb-3">Contact us</a><br><br>
            </div>
        </div>

         <!-- Image Section -->
         <div class="col-md-6 col-sm-12 mb-5">
            <img src="image/travailler_usa1.jpg" alt="Accompagnement Personnalisé pour Votre Projet Professionnel" class="img-fluid img-info">
        </div>

    </div>

</div>


        

<?php include("footer.php");?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/css-animations.js/0.1.0/css-animations.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>