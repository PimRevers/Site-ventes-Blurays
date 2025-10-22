<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BluRay Store</title>

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

    /* Bannière */
    .banner {
      background: linear-gradient(rgba(255,255,255,0.3), rgba(255,255,255,0.3)),
                  url('https://via.placeholder.com/1200x400/1e90ff/ffffff?text=Blu-ray+Store') center/cover no-repeat;
      height: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .banner h1 {
      font-size: 3em;
      color: var(--bleu-fonce);
      background: rgba(255,255,255,0.7);
      padding: 10px 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    /* Produits */
    .online {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      margin: 40px auto 20px auto;
    }

    .online h2 {
      font-size: 2em;
      color: var(--bleu-fonce);
      background: rgba(255,255,255,0.7);
      padding: 10px 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    .produits {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      padding: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .carte {
      background: var(--gris-carte);
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .carte:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(30, 144, 255, 0.3);
    }

    .carte img {
      width: 100%;
      border-radius: 6px;
      margin-bottom: 10px;
    }

    .carte h3 {
      font-size: 1.1em;
      margin-bottom: 8px;
      color: var(--bleu-fonce);
    }

    .prix {
      color: var(--bleu-moyen);
      font-weight: bold;
      margin-bottom: 10px;
    }

    .btn {
      background: var(--bleu-clair);
      color: var(--blanc);
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
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
      box-shadow: 0 -2px 6px rgba(0,0,0,0.2);
    }

    @media (max-width: 600px) {
      .banner h1 {
        font-size: 2em;
      }

      .online h2 {
        font-size: 1.5em;
      }
    }
  </style>

</head>
<body>
  <nav>
    <div class="logo">Blu-Ray Store</div>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Catalogue</a></li>
      <li><a href="#">Connexion</a></li>
      <li><a href="#">Panier</a></li>
    </ul>
  </nav>

  <div class="banner">
    <h1>Vente de Films Blu-Rays physique</h1>
  </div>

  <div class="online">
    <h2>Derniers Blu-Ray mis en ligne</h2>
  </div>

  <section class="produits">
    <div class="carte">
      <img src="https://via.placeholder.com/200x300/1e90ff/ffffff?text=Film+1" alt="Film 1">
      <h3>Film 1</h3>
      <p class="prix">14,99 €</p>
      <button class="btn">Ajouter au panier</button>
    </div>
    <div class="carte">
      <img src="https://via.placeholder.com/200x300/1e90ff/ffffff?text=Film+2" alt="Film 2">
      <h3>Film 2</h3>
      <p class="prix">19,99 €</p>
      <button class="btn">Ajouter au panier</button>
    </div>
    <div class="carte">
      <img src="https://via.placeholder.com/200x300/1e90ff/ffffff?text=Film+3" alt="Film 3">
      <h3>Film 3</h3>
      <p class="prix">12,99 €</p>
      <button class="btn">Ajouter au panier</button>
    </div>
    <div class="carte">
      <img src="https://via.placeholder.com/200x300/1e90ff/ffffff?text=Film+4" alt="Film 4">
      <h3>Film 4</h3>
      <p class="prix">17,99 €</p>
      <button class="btn">Ajouter au panier</button>
    </div>
  </section>

  <footer>
    © 2025 Blu-Ray Store — Tous droits réservés.
  </footer>
</body>
</html>
