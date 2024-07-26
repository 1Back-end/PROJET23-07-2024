<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php $pageTitle  = 'Contact';?>
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
   <h1 class="animate__animated animate__fadeInUp text-uppercase font-weight-bold display-3">Contact</h1>
   </div>
 </div>
 </div>
</section>
<div class="container section-padding p-3 mt-5">
        <div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12">
                <h2 class="animate__animated animate__fadeIn">Contact Us</h2>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
                <div class="h-100 mb-3">
                    <img src="image/voyage5.jpg" alt="" class="img-fluid img-contact w-100">
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



<?php include("google_map.php");?>


<?php include("footer.php");?>





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
<script src="https://cdnjs.cloudflare.com/ajax/libs/css-animations.js/0.1.0/css-animations.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



</body>
</html>
</div>