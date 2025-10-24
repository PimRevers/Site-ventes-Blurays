<?php
session_start();
require("config/commandes.php");

if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    // Récupère le produit en base
    $produits = afficher();
    $produit = null;
    foreach ($produits as $p) {
        if ($p['id'] == $id) {
            $produit = $p;
            break;
        }
    }

    if ($produit) {
        // Initialise le panier s’il n’existe pas encore
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = [];
        }

        // Vérifie si le produit est déjà dans le panier
        $existe = false;
        foreach ($_SESSION['panier'] as &$item) {
            if ($item['id'] == $produit['id']) {
                $item['quantite']++;
                $existe = true;
                break;
            }
        }

        // Si pas encore dans le panier, on l’ajoute
        if (!$existe) {
            $produit['quantite'] = 1;
            $_SESSION['panier'][] = $produit;
        }
    }
}

// Redirection vers le panier
header("Location: panier.php");
exit;