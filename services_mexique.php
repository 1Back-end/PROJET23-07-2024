<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'Services From Mexico';?>
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
   <h1 class="animate__animated animate__fadeInUp text-uppercase font-weight-bold display-3">Services From Mexico</h1>
   </div>
 </div>
 </div>
</section>



<div class="container section-padding mt-3 pb-5 p-3">
<div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12 ">
                <p class="small text-center">Experience memorable adventures in Mexico with our tailor-made services, including ongoing assistance and exclusive solutions to guarantee a unique and worry-free stay.</p>
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
                        <h5 class="text-uppercase  fw-bold">Visit Mexico</h5>
                    </div>
                    <div class="mb-3">
                        <p class="small text-muted">
                        Discover the spectacular landscapes of Mexico, where vibrant culture meets idyllic beaches. Enjoy historical treasures and unique adventures in this fascinating country.
                        </p>
                    </div>
                    <div class="mb-3">
                    <a href="visiter_mexique.php" class="btn-services animate__animated animate__fadeInUp">More informations</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card-box p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <span class="icon-bg"><i class="fas fa-cogs"></i></span>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase  fw-bold">Work in Mexico</h5>
                    </div>
                    <div class="mb-3">
                        <p class="small text-muted">
                        Explore professional opportunities in Mexico, a country offering economic dynamism and a welcoming culture. Discover rewarding careers in a sunny and diverse setting.
                        </p>
                    </div>
                    <div class="mb-3">
                    <a href="travailler_mexique.php" class="btn-services animate__animated animate__fadeInUp">More informations</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card-box p-3 text-center animate__animated animate__fadeInUp h-100">
                    <div class="mb-3">
                    <span class="icon-bg"><i class="fas fa-cogs"></i></span>
                    </div>
                    <div class="mb-3">
                        <h5 class="text-uppercase fw-bold">Study in Mexico</h5>
                    </div>
                    <div class="mb-3">
                        <p class="small text-muted">
                        Immerse yourself in the academic experience in Mexico, where renowned institutions offer quality education in a culturally rich environment. Enjoy an immersive education while exploring the wonders of this fascinating country.
                        </p>
                    </div>
                    <div class="mb-3">
                    <a href="etudier_mexique.php" class="btn-services animate__animated animate__fadeInUp">More informations</a>
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