<?php
// Déclaration du nom du site
$siteName = "World Travel Company";

// Déclaration du nom de la page (à définir dans chaque page PHP)
$pageTitle = isset($pageTitle) ? $pageTitle : "Page"; // Valeur par défaut si non défini

// Génération du titre complet
$title = $pageTitle . " - " . $siteName;
?>