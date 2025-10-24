<?php
    require("config/commandes.php");

    if (!isset($_GET['id']) || empty($_GET['id'])) {
        header("Location: index.php");
        exit;
    }

    $id = intval($_GET['id']);
    $produit = getProduitById($id);

    if (!$produit) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($produit['nom']) ?>BluRay Store</title>
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

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

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

    nav .logo {
      font-size: 1.5em;
      font-weight: bold;
      text-shadow: 0 0 5px rgba(255,255,255,0.3);
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: var(--blanc);
      text-decoration: none;
      transition: opacity 0.2s;
    }

    nav ul li a:hover {
      opacity: 0.8;
    }

    /* Section produit */
    .produit-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 40px;
      padding: 50px;
      background: var(--gris-fond);
      flex-wrap: wrap;
    }

    .image-produit img {
      width: 300px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .details-produit {
      max-width: 600px;
      background: var(--gris-carte);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .details-produit h1 {
      color: var(--bleu-fonce);
      margin-bottom: 15px;
    }

    .details-produit p {
      margin-bottom: 10px;
      line-height: 1.5;
    }

    .prix {
      font-size: 1.5em;
      color: var(--bleu-moyen);
      font-weight: bold;
      margin-top: 15px;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      background: var(--bleu-clair);
      color: var(--blanc);
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      transition: background 0.2s;
    }

    .btn:hover {
      background: var(--bleu-fonce);
    }

    /* Pied de page */
    footer {
      background: linear-gradient(135deg, var(--bleu-clair), var(--bleu-moyen), var(--bleu-fonce));
      text-align: center;
      padding: 20px;
      font-size: 0.9em;
      color: var(--blanc);
      margin-top: auto;
    }

  </style>
</head>
<body>
  <nav>
    <div class="logo">Blu-Ray Store</div>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="panier.php">Panier</a></li>
      <li><a href="login.php">Connexion</a></li>
    </ul>
  </nav>

  <div class="produit-container">
    <div class="image-produit">
      <img src="<?= htmlspecialchars($produit['url']) ?>" alt="<?= htmlspecialchars($produit['nom']) ?>">
    </div>

    <div class="details-produit">
      <h1><?= htmlspecialchars($produit['nom']) ?></h1>
      <p><strong>Date de sortie :</strong> <?= htmlspecialchars($produit['date_sortie']) ?></p>
      <p><strong>Réalisateur :</strong> <?= htmlspecialchars($produit['realisateur']) ?></p>
      <p><strong>Acteurs :</strong> <?= htmlspecialchars($produit['acteurs']) ?></p>
      <p><strong>Genre :</strong> <?= htmlspecialchars($produit['genre']) ?></p>
      <p><strong>Durée :</strong> <?= htmlspecialchars($produit['duree']) ?></p>
      <p class="prix"><?= htmlspecialchars($produit['prix']) ?> €</p>

      <form action="ajouter_panier.php" method="POST">
        <input type="hidden" name="id" value="<?= $produit['id'] ?>">
        <button type="submit" class="btn">Ajouter au panier</button>
      </form>

      <a href="index.php" class="btn" style="margin-left:10px;">← Retour</a>
    </div>
  </div>

  <footer>
    © 2025 Blu-Ray Store — Tous droits réservés.
  </footer>
</body>
</html>
