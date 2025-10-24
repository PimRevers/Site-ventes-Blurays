<?php
    session_start();

    // Si le panier est vide, on renvoie vers la boutique
    if (empty($_SESSION['panier'])) {
        header("Location: panier.php");
        exit;
    }

    // Calcul du total
    $total = 0;
    foreach ($_SESSION['panier'] as $item) {
        $total += $item['prix'] * $item['quantite'];
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Paiement sécurisé - BluRay Store</title>
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

    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background: var(--gris-fond);
      color: var(--texte);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

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
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: var(--blanc);
      text-decoration: none;
    }

    main {
      flex: 1;
      max-width: 500px;
      margin: 40px auto;
      background: var(--gris-carte);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: var(--bleu-fonce);
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
    }

    input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1em;
    }

    input:focus {
      border-color: var(--bleu-clair);
      outline: none;
      box-shadow: 0 0 5px rgba(30,144,255,0.3);
    }

    button {
      padding: 12px;
      background: var(--bleu-clair);
      color: var(--blanc);
      border: none;
      border-radius: 6px;
      font-size: 1em;
      cursor: pointer;
      transition: background 0.2s;
      font-weight: bold;
    }

    button:hover {
      background: var(--bleu-fonce);
    }

    .total {
      text-align: center;
      font-size: 1.2em;
      margin-top: 10px;
      color: var(--bleu-fonce);
    }

    .erreur {
      color: var(--rouge);
      font-weight: bold;
      text-align: center;
    }

    footer {
      background: linear-gradient(135deg, var(--bleu-clair), var(--bleu-moyen), var(--bleu-fonce));
      text-align: center;
      padding: 20px;
      font-size: 0.9em;
      color: var(--blanc);
      box-shadow: 0 -2px 6px rgba(0,0,0,0.2);
    }
  </style>

  <script>
    function validerPaiement(event) {
      event.preventDefault();

      const nom = document.getElementById("nom").value.trim();
      const numero = document.getElementById("numero").value.trim();
      const expiration = document.getElementById("expiration").value.trim();
      const cvv = document.getElementById("cvv").value.trim();
      const erreur = document.getElementById("erreur");

      erreur.textContent = "";

      // Vérifie que les champs sont remplis
      if (!nom || !numero || !expiration || !cvv) {
        erreur.textContent = "⚠️ Tous les champs sont obligatoires.";
        return;
      }

      // Vérifie que le numéro contient 16 chiffres
      if (!/^\d{16}$/.test(numero)) {
        erreur.textContent = "⚠️ Le numéro de carte doit contenir exactement 16 chiffres.";
        return;
      }

      // Vérifie la date d’expiration (MM/YY)
      if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiration)) {
        erreur.textContent = "⚠️ La date d'expiration doit être au format MM/YY.";
        return;
      }

      // Vérifie le CVV (3 chiffres)
      if (!/^\d{3}$/.test(cvv)) {
        erreur.textContent = "⚠️ Le code CVV doit contenir 3 chiffres.";
        return;
      }

      // Si tout est bon, on simule la validation
      window.location.href = "paiement_valide.php";
    }
  </script>
</head>

<body>

  <nav>
    <div class="logo">Blu-Ray Store</div>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="panier.php">Panier</a></li>
    </ul>
  </nav>

  <main>
    <h1>Paiement sécurisé</h1>

    <p class="total">Total à payer : <strong><?= number_format($total, 2) ?> €</strong></p>

    <form onsubmit="validerPaiement(event)">
      <div>
        <label for="nom">Nom sur la carte :</label>
        <input type="text" id="nom" placeholder="Jean Dupont">
      </div>

      <div>
        <label for="numero">Numéro de carte :</label>
        <input type="text" id="numero" maxlength="16" placeholder="1234567812345678">
      </div>

      <div>
        <label for="expiration">Date d’expiration (MM/YY) :</label>
        <input type="text" id="expiration" maxlength="5" placeholder="08/27">
      </div>

      <div>
        <label for="cvv">Code CVV :</label>
        <input type="text" id="cvv" maxlength="3" placeholder="123">
      </div>

      <p id="erreur" class="erreur"></p>

      <button type="submit">Valider le paiement</button>
    </form>
  </main>

  <footer>
    © 2025 Blu-Ray Store — Tous droits réservés.
  </footer>

</body>
</html>
