
<div class="container section-padding p-3 mt-5">
        <div class="row text-center mb-4">
            <div class="col-md-12 col-sm-12">
                <h2 class="animate__animated animate__fadeIn">Contactez-Nous</h2>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
                <div class="h-100 mb-3">
                    <img src="image/voyage5.jpg" alt="" class="img-contact w-100">
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
                    <form action="" id="contactForm" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <small>Nom & Prénom <span class="text-danger">*</span></small>
                                    <input type="text" name="nom" class="shadow-none form-control py-3" required>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <small>Adresse <span class="text-danger">*</span></small>
                                    <input type="text" name="adresse" class="shadow-none form-control py-3" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <small>Email <span class="text-danger">*</span></small>
                                    <input type="email" name="email" class="shadow-none form-control py-3" required>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <small>Numéro de téléphone <span class="text-danger">*</span></small><br>
                                    <input type="tel" name="tel" id="phone" class="shadow-none form-control py-3" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <small>Message <span class="text-danger">*</span></small>
                            <textarea name="message" style="height:110px;" id="" class="shadow-none" required></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" name="submit" class="submit_btn">Soumettre maintenant</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>