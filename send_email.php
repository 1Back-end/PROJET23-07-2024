<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST["submit"])) {
    // Récupération des données du formulaire
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : null;
    $adresse = isset($_POST['adresse']) ? trim($_POST['adresse']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $tel = isset($_POST['tel']) ? trim($_POST['tel']) : null;
    $message = isset($_POST['message']) ? trim($_POST['message']) : null;

    // Validation des champs
    if (empty($nom) || empty($adresse) || empty($email) || empty($tel) || empty($message)) {
        $erreur = "Tous les champs sont requis. Veuillez remplir chaque champ du formulaire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = "L'adresse e-mail fournie semble invalide. Veuillez vérifier et réessayer.";
    } else {
        // Configuration de PHPMailer
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Remplacez par votre serveur SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'laurentalphonsewilfried@gmail.com'; // Remplacez par votre adresse e-mail
            $mail->Password = 'ztgs elyg jaxy emnx'; // Remplacez par votre mot de passe e-mail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Destinataire
            $mail->setFrom('laurentalphonsewilfried@gmail.com', 'Laurent Alphonse');
            $mail->addAddress('laurentalphonsewilfried@gmail.com'); // Adresse e-mail de l'administrateur

            // Contenu de l'e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Nouveau Message de Contact';
            
            $mail->Body = '
            <html>
            <head>
                <style>
                    body { font-family: Poppins, sans-serif; }
                    .container { width: 100%; max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; }
                    .header { background: #f4f4f4; padding: 10px; text-align: center; }
                    .content { padding: 20px; }
                    .footer { background: #f4f4f4; padding: 10px; text-align: center; font-size: 12px; color: #888; }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="header">
                        <h2>Nouveau Message de Contact</h2>
                    </div>
                    <div class="content">
                        <p><strong>Nom :</strong> ' . htmlspecialchars($nom) . '</p>
                        <p><strong>Adresse :</strong> ' . htmlspecialchars($adresse) . '</p>
                        <p><strong>Email :</strong> ' . htmlspecialchars($email) . '</p>
                        <p><strong>Téléphone :</strong> ' . htmlspecialchars($tel) . '</p>
                        <p><strong>Message :</strong></p>
                        <p>' . nl2br(htmlspecialchars($message)) . '</p>
                    </div>
                    <div class="footer">
                        <p>Ce message a été envoyé automatiquement. Veuillez ne pas répondre.</p>
                    </div>
                </div>
            </body>
            </html>';

            // Envoi de l'e-mail
            $mail->send();
            $succes = 'Votre message a été envoyé avec succès. Nous vous remercions pour votre prise de contact. Nous reviendrons vers vous dans les plus brefs délais.';
        } catch (Exception $e) {
            echo "Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
        }
    }
}
?>
