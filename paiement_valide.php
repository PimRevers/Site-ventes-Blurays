<?php
session_start();

// Une fois le paiement validé, on vide le panier
unset($_SESSION['panier']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Paiement validé - BluRay Store</title>
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

    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background: var(--gris-fond);
      color: var(--texte);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      justify-content: center;
      align-items: center;
    }

    .message {
      background: var(--gris-carte);
      padding: 40px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .message h2 {
      color: var(--bleu-fonce);
      margin-bottom: 15px;
    }

    .message p {
      margin-bottom: 20px;
    }

    a {
      background: var(--bleu-clair);
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      transition: background 0.2s;
    }

    a:hover {
      background: var(--bleu-fonce);
    }
  </style>
</head>
<body>

  <div class="message">
    <h2>✅ Paiement validé !</h2>
    <p>Merci pour votre achat. Votre commande a bien été enregistrée.</p>
    <a href="index.php">Retour à l’accueil</a>
  </div>

</body>
</html>
