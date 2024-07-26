<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'Services';?>
    <?php include 'title.php';?>
    <?php echo $title; ?>-<?php echo $pageTitle ; ?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flagpack@1.0.0/css/flagpack.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include_once("navbar.php");?>



<section class="service-section">
 <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
   <div class="mb-3">
   <h1 class="animate__animated animate__fadeInUp text-uppercase font-weight-bold display-3">Our services</h1>
   </div>
 </div>
 </div>
</section>


<div class="container section-padding mt-3 pb-5 p-3">
<div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12 ">
                <h2 class="animate__animated animate__fadeIn">Our services</h2>
                <p class="small text-center">Discover the range of personalized services we offer to transform your trips into unforgettable experiences. Whether you're looking for tailor-made planning, 24/7 support during your stay, or exclusive services tailored to your needs, we're here to provide you with an exceptional travel experience every step of the way.</p>
            </div>
        </div>



        <div class="container section-padding mt-3 p-3 pb-5">
        <div class="row mb-3">
        <!-- Image Section -->
        <div class="col-md-6 col-sm-12 mb-3">
            <img src="image/voyage1.jpg" alt="Organisation de Voyages sur Mesure" class="img-fluid img-info">
        </div>

        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-2">Organization of tailor-made trips</h4>
                <p class="description-text mb-2">
                We create tailor-made trips adapted to your desires and needs. Whether you're dreaming of a romantic getaway, a family adventure, or a cultural trip, we craft personalized itineraries for every destination. Thanks to our expertise and in-depth knowledge of destinations, we guarantee you a unique and memorable experience.
                </p>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-2">Complete management of travel reservations</h4>
                <p class="description-text mb-2">We take care of all stages of your travel reservations, including flights, hotels, transfers and activities. By entrusting us with the management of your reservations, you benefit from our network of privileged partners which allows us to offer you the best offers and conditions. We take care of everything so you can travel with peace of mind. Benefit from our expertise to navigate the Canadian job market. We help you find the best opportunities and succeed in your professional career in a dynamic and stimulating environment.
                </p>
            </div>
        </div>

         <!-- Image Section -->
         <div class="col-md-6 col-sm-12 mb-5">
            <img src="image/voyage2.jpg" alt="Gestion Complète des Réservations de Voyage" class="img-fluid img-info">
        </div>
    </div>
</div>

<div class="row mb-3">
        <!-- Image Section -->
        <div class="col-md-6 col-sm-12 mb-3">
            <img src="image/voyage3.jpg" alt="Assistance et Support 24/7" class="img-fluid img-info">
        </div>

        <!-- Text Section -->
        <div class="col-md-6 col-sm-12 mb-3 text-wrapper">
            <div class="text-content">
                <h4 class="fw-bold mb-2">24/7 Assistance and Support</h4>
                <p class="description-text mb-2">
                We offer a 24/7 assistance and support service to accompany our customers throughout their journey. Whether for advice before departure, help with problems on site or information on return conditions, our team is always available to meet your needs. Traveling with us means leaving with complete peace of mind, knowing that we are there for you every step of the way.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container section-padding p-3 mt-5">
        <div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12">
                <h2 class="animate__animated animate__fadeIn">For more information, contact us</h2>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3 order-md-1 order-2">
                <div class="h-100 mb-3">
                    <img src="image/voyage4.jpg" alt="" class="img-fluid img-contact w-100">
                </div>
            </div>

            <div class="col-md-6 col-sm-12 mb-3">
                <?php include_once ("send_email.php");?>
                <?php if (!empty($succes)) : ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?= $succes ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($erreur)) : ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?= $erreur ?>
                    </div>
                <?php endif; ?>
                <div class="card-box shadow-sm p-3">
                <?php include_once("contact_form.php");?>
                </div>
            </div>
        </div>  
    </div>


<?php include("footer.php");?>

<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch('https://ipinfo.io?token=<YOUR_TOKEN>', { headers: { 'Accept': 'application/json' } })
                    .then(response => response.json())
                    .then(data => callback(data.country))
                    .catch(() => callback('us'));
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js",
        });
        </script>

<script>
    $(document).ready(function() {
    // Cacher l'alerte après 2 secondes (2000 ms)
    setTimeout(function() {
    $(".alert").alert('close');
    }, 1000);
    });
</script>


   

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/css-animations.js/0.1.0/css-animations.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



</body>
</html>
</div>
