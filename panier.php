<?php
session_start();

// Supprimer un article du panier
if (isset($_GET['supprimer'])) {
    $id = (int) $_GET['supprimer'];
    foreach ($_SESSION['panier'] as $key => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['panier'][$key]);
            $_SESSION['panier'] = array_values($_SESSION['panier']); // réindexation
            break;
        }
    }
    header("Location: panier.php");
    exit;
}

// Calcul du total
$total = 0;
if (!empty($_SESSION['panier'])) {
    foreach ($_SESSION['panier'] as $item) {
        $total += $item['prix'] * $item['quantite'];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mon Panier - BluRay Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    :root {
      --bleu-fonce: #003366;
      --bleu-moyen: #0066cc;
      --bleu-clair: #1e90ff;
      --gris-fond: #e8edf3;
      --gris-carte: #f5f7fa;
      --texte: #1a1a1a;
      --blanc: #ffffff;
      --rouge: #e74c3c;
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
      min-height: 100vh;
      display: flex;
      flex-direction: column;
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

    /* Contenu principal */
    main {
      flex: 1;
      max-width: 1000px;
      margin: 40px auto;
      background: var(--gris-carte);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: var(--bleu-fonce);
      margin-bottom: 30px;
      font-size: 2em;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background: var(--bleu-clair);
      color: var(--blanc);
      font-weight: bold;
    }

    tr:hover {
      background: #f1f7ff;
    }

    .btn-supprimer {
      background: var(--rouge);
      color: var(--blanc);
      padding: 6px 12px;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-size: 0.9em;
      transition: background 0.2s;
    }

    .btn-supprimer:hover {
      background: #c0392b;
    }

    .total {
      text-align: right;
      font-size: 1.3em;
      margin-top: 20px;
      color: var(--bleu-fonce);
    }

    .retour, .vider {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      color: var(--blanc);
      transition: background 0.2s;
    }

    .retour {
      background: var(--bleu-moyen);
    }

    .retour:hover {
      background: var(--bleu-fonce);
    }

    .vider {
      background: var(--rouge);
      margin-left: 15px;
    }
    

    .vider:hover {
      background: #c0392b;
    }

    .commander {
      display: inline-block;
      background: var(--bleu-clair);
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.2s;
    }

    .commander:hover {
      background: var(--bleu-fonce);
    }


    footer {
      background: linear-gradient(135deg, var(--bleu-clair), var(--bleu-moyen), var(--bleu-fonce));
      text-align: center;
      padding: 20px;
      font-size: 0.9em;
      color: var(--blanc);
      box-shadow: 0 -2px 6px rgba(0,0,0,0.2);
    }

    @media (max-width: 700px) {
      table {
        font-size: 0.9em;
      }
      th, td {
        padding: 10px;
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo">Blu-Ray Store</div>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="login.php">Connexion</a></li>
      <li><a href="panier.php">Panier</a></li>
    </ul>
  </nav>

  <main>
    <h1>🛒 Votre Panier</h1>

    <?php if (!empty($_SESSION['panier'])): ?>
      <table>
        <tr>
          <th>Image</th>
          <th>Nom</th>
          <th>Prix</th>
          <th>Quantité</th>
          <th>Total</th>
          <th>Action</th>
        </tr>

        <?php foreach ($_SESSION['panier'] as $item): ?>
        <tr>
          <td><img src="<?= htmlspecialchars($item['url']) ?>" alt="image" width="70"></td>
          <td><?= htmlspecialchars($item['nom']) ?></td>
          <td><?= number_format($item['prix'], 2) ?> €</td>
          <td><?= $item['quantite'] ?></td>
          <td><?= number_format($item['prix'] * $item['quantite'], 2) ?> €</td>
          <td><a href="?supprimer=<?= $item['id'] ?>" class="btn-supprimer">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
      </table>

      <p class="total">Total : <strong><?= number_format($total, 2) ?> €</strong></p>

      <div style="text-align:center;">
        <a href="index.php" class="retour">← Continuer mes achats</a>
        <a href="paiement.php" class="commander">Passer la commande</a>
        <a href="vider_panier.php" class="vider">Vider le panier</a>
      </div>

    <?php else: ?>
      <p style="text-align:center;">Votre panier est vide.</p>
      <div style="text-align:center;">
        <a href="index.php" class="retour">← Retour à la boutique</a>
      </div>
    <?php endif; ?>
  </main>

  <footer>
    © 2025 Blu-Ray Store — Tous droits réservés.
  </footer>

</body>
</html>