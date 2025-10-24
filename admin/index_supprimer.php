<?php

    session_start();

    if (!isset($_SESSION['session_unique'])) {
        header("Location: ../login.php/");
        exit;
    }

    require("../config/commandes.php");

    if (isset($_POST['valider'])) {
        if (!empty($_POST['id']) AND is_numeric($_POST['id'])) {
            $id = htmlspecialchars(strip_tags($_POST['id']));
            supprimer($id);
            header("Location: ".$_SERVER['PHP_SELF']); // recharge la page après suppression
            exit;
        }
    }

    $Produits = afficher();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Supprimer un Blu-Ray</title>

<style>
:root {
    --bleu-fonce: #003366;
    --bleu-moyen: #0066cc;
    --bleu-clair: #1e90ff;
    --gris-fond: #e8edf3;
    --gris-carte: #f5f7fa;
    --texte: #1a1a1a;
    --blanc: #ffffff;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    font-family: "Segoe UI", Arial, sans-serif;
    background: var(--gris-fond);
    color: var(--texte);
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Navigation */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, var(--bleu-fonce), var(--bleu-moyen), var(--bleu-clair));
    padding: 15px 30px;
    color: var(--blanc);
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

nav .logo { font-size: 1.5em; font-weight: bold; text-shadow: 0 0 5px rgba(255,255,255,0.3); }
nav ul { list-style: none; display: flex; gap: 20px; }
nav ul li a { color: var(--blanc); text-decoration: none; transition: opacity 0.2s; }
nav ul li a:hover { opacity: 0.8; }

/* Main content */
.main {
    flex: 1;
    display: flex;
    gap: 40px;
    padding: 40px;
    max-width: 1200px;
    margin: 0 auto;
}

.left {
    flex: 1;
}

.right {
    flex: 2;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

/* Formulaire */
.form-card {
    background: var(--gris-carte);
    padding: 40px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    width: 100%;
    text-align: center;
}

.form-card h2 { color: var(--bleu-fonce); margin-bottom: 25px; font-size: 1.8em; }
.form-card input[type="number"] {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1em;
}
.form-card input:focus { border-color: var(--bleu-moyen); outline: none; box-shadow: 0 0 5px rgba(30,144,255,0.3); }
.form-card button {
    width: 100%;
    padding: 12px;
    background: var(--bleu-clair);
    color: var(--blanc);
    border: none;
    border-radius: 6px;
    font-size: 1em;
    cursor: pointer;
    transition: background 0.2s;
}
.form-card button:hover { background: var(--bleu-fonce); }

/* Carte Blu-Ray */
.carte {
    background: var(--gris-carte);
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.carte img {
    width: 150px;
    height: 220px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 10px;
}

/* Footer */
footer {
    background: linear-gradient(135deg, var(--bleu-clair), var(--bleu-moyen), var(--bleu-fonce));
    text-align: center;
    padding: 20px;
    font-size: 0.9em;
    color: var(--blanc);
    box-shadow: 0 -2px 6px rgba(0,0,0,0.2);
}

/* Responsive */
@media (max-width: 900px) {
    .main { flex-direction: column; }
    .right { grid-template-columns: 1fr; }
}
</style>
</head>
<body>

<nav>
    <div class="logo">Blu-Ray Store - Administration</div>
    <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="index_ajouter.php">Ajouter</a></li>
        <li><a href="index_supprimer.php">Supprimer</a></li>
        <li><a href="logout.php">Déconnexion</a></li>
        <li><a href=".. /panier.php">Panier</a></li>
    </ul>
</nav>

<div class="main">
    <div class="left">
        <div class="form-card">
            <h2>Supprimer un Blu-Ray</h2>
            <form action="" method="POST">
                <input type="number" step="1" name="id" placeholder="Identifiant du Blu-Ray" required>
                <button type="submit" name="valider">Supprimer</button>
            </form>
        </div>
    </div>

    <div class="right">
        <?php foreach ($Produits as $produit): ?>
            <div class="carte">
                <img src="<?= $produit['url'] ?>" alt="<?= $produit['nom'] ?>">
                <h3><?= $produit['nom'] ?></h3><br>
                <h3><?= $produit['id'] ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<footer>
    © 2025 Blu-Ray Store — Tous droits réservés.
</footer>

</body>
</html>
