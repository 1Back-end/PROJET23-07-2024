<footer class="text-white pt-5 pb-4">
    <div class="container text-md-left ">
        <div class="row text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="mb-3 font-weight-bold">Contactez-Nous</h5>
                <div class="mb-4">
                    <i class="fa fa-map-marker-alt me-3"></i>
                    <span>Douala, Cameroun</span>
                </div>
                
                <div class="mb-4">
                    <i class="fa fa-envelope me-3"></i>
                    <span>info@immigrationcameroun.com</span>
                </div>
                <div class="mb-4">
                    <i class="fa fa-clock me-3"></i>
                    <span>Lundi - Vendredi : 9h - 17h</span>
                </div>
                <div class="mb-2">
         <!-- Ajouter le widget Google Translate -->
                <div id="google_translate_element"></div>
                </div>
    
            </div>

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="mb-3 font-weight-bold">Liens Rapides</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3">
                        <a href="index.php" class="text-decoration-none text-white"><i class="fa fa-chevron-right me-3" aria-hidden="true"></i>Accueil</a>
                    </li>
                    <li class="mb-3">
                        <a href="about.php" class="text-decoration-none text-white"><i class="fa fa-chevron-right me-3" aria-hidden="true"></i>A propos</a>
                    </li>
                    <li class="mb-3">
                        <a href="services.php" class="text-decoration-none text-white"><i class="fa fa-chevron-right me-3" aria-hidden="true"></i> Services</a>
                    </li>
                    <li class="mb-3">
                        <a href="about.php" class="text-decoration-none text-white"><i class="fa fa-chevron-right me-3" aria-hidden="true"></i> Destinations</a>
                    </li>
                    <li class="mb-3">
                        <a href="contact.php" class="text-decoration-none text-white"><i class="fa fa-chevron-right me-3" aria-hidden="true"></i>Contact</a>
                    </li>
                </ul>
            
               
            </div>

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="mb-4 font-weight-bold">Nos Réseaux</h5>
            <div class="social-icons">
            <a href="#" class="text-decoration-none text-white mb-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-decoration-none text-white mb-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-decoration-none text-white mb-3"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="mb-4 font-weight-bold">Newsletter</h5>
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="email" class="newsletter-input" placeholder="Votre adresse email">
                </div>
                <button type="submit" class="login-btn">S'inscrire</button>
            </form>
        </div>
        </div>
        </div>
    </div>
</footer>
<!-- Script pour Google Translate -->
<script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'fr', // Langue par défaut du site
                includedLanguages: 'en,fr', // Langues disponibles
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE // Simplifier l'affichage
            }, 'google_translate_element');
        }

        (function() {
            var gtScript = document.createElement('script');
            gtScript.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
            document.body.appendChild(gtScript);
        })();

        document.getElementById('language-select').addEventListener('change', function() {
            var lang = this.value;
            var iframe = document.querySelector('#google_translate_element iframe');
            if (iframe) {
                var iframeWindow = iframe.contentWindow;
                var select = iframeWindow.document.querySelector('select.goog-te-combo');
                if (select) {
                    select.value = lang;
                    select.dispatchEvent(new Event('change'));
                }
            } else {
                // Attendre que le script Google Translate soit chargé
                setTimeout(function() {
                    var iframe = document.querySelector('#google_translate_element iframe');
                    if (iframe) {
                        var iframeWindow = iframe.contentWindow;
                        var select = iframeWindow.document.querySelector('select.goog-te-combo');
                        if (select) {
                            select.value = lang;
                            select.dispatchEvent(new Event('change'));
                        }
                    }
                }, 1000); // Ajuster le délai si nécessaire
            }
        });
    </script>