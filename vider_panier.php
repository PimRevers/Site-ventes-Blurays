<?php
    session_start();

    // Supprimer complètement la variable de session 'panier'
    if (isset($_SESSION['panier'])) {
        unset($_SESSION['panier']);
    }

    // Redirection vers la page du panier
    header("Location: panier.php");
    exit;
?>