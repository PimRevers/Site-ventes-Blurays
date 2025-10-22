<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BluRay Store</title>
  <style>
    :root {
      --bleu-fonce: #0a3d62;
      --bleu-clair: #1e90ff;
      --gris-fonce: #1c1c1c;
      --blanc: #ffffff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background: var(--gris-fonce);
      color: var(--blanc);
    }

    /* Navigation */
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--bleu-fonce);
      padding: 15px 30px;
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
      transition: color 0.2s;
    }

    nav ul li a:hover {
      color: var(--bleu-clair);
    }

    /* Bannière */
    .banner {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url('https://via.placeholder.com/1200x400/0a3d62/ffffff?text=Blu-ray+Store') center/cover no-repeat;
      height: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .banner h1 {
      font-size: 3em;
      color: var(--blanc);
    }

    /* Produits */
    .produits {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      padding: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .carte {
      background: #2c2c2c;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .carte:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(30, 144, 255, 0.4);
    }

    .carte img {
      width: 100%;
      border-radius: 6px;
      margin-bottom: 10px;
    }

    .carte h3 {
      font-size: 1.1em;
      margin-bottom: 8px;
    }

    .prix {
      color: var(--bleu-clair);
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
      background: #0a0a0a;
      text-align: center;
      padding: 20px;
      font-size: 0.9em;
      color: #aaa;
    }

    @media (max-width: 600px) {
      .banner h1 {
        font-size: 2em;
      }
    }
  </style>
</head>
<body>
  <nav>
    <div class="logo">🎬 BluRay Store</div>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Catalogue</a></li>
      <li><a href="#">Promotions</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Panier 🛒</a></li>
    </ul>
  </nav>

  <div class="banner">
    <h1>Les meilleurs Blu-ray à prix juste</h1>
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
    © 2025 BluRay Store — Tous droits réservés.
  </footer>
</body>
</html>
