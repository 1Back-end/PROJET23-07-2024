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
        $erreur = "All fields are required. Please fill out each field in the form.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = "The provided email address seems invalid. Please check and try again.";
    } else {
        // Configuration de PHPMailer
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Remplacez par votre serveur SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'travelcompany811@gmail.com'; // Remplacez par votre adresse e-mail
            $mail->Password = 'njwsnthquumpdnti'; // Remplacez par votre mot de passe e-mail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Destinataire
            $mail->setFrom('travelcompany811@gmail.com', 'World Travel Company');
            $mail->addAddress('travelcompany811@gmail.com'); // Adresse e-mail de l'administrateur

            // Contenu de l'e-mail
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Message';
            
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
                        <h2>New Contact Message</h2>
                    </div>
                    <div class="content">
                        <p><strong>Name:</strong> ' . htmlspecialchars($nom) . '</p>
                        <p><strong>Address:</strong> ' . htmlspecialchars($adresse) . '</p>
                        <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
                        <p><strong>Phone:</strong> ' . htmlspecialchars($tel) . '</p>
                        <p><strong>Message:</strong></p>
                        <p>' . nl2br(htmlspecialchars($message)) . '</p>
                    </div>
                    <div class="footer">
                        <p>This message was sent automatically. Please do not reply.</p>
                    </div>
                </div>
            </body>
            </html>';

            // Envoi de l'e-mail
            $mail->send();
            $succes = 'Your message has been sent successfully. Thank you for contacting us. We will get back to you as soon as possible.';
        } catch (Exception $e) {
            $erreur= "The message could not be sent. Error: {$mail->ErrorInfo}";
        }
    }
}
?>
