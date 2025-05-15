<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interface Admin</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #121212;
      color: rgb(255, 255, 253);
    }

    header {
      background-color: #1E1E1E;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header h1 {
      margin: 0;
      font-size: 1.5em;
    }

    .container {
      display: flex;
      height: calc(100vh - 50px);
    }

    .sidebar {
      background-color: #1A1A1A;
      width: 250px;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
    }

    .sidebar button {
      background-color: transparent;
      border: 1px solid rgb(209, 142, 111);
      color: rgb(209, 142, 111);
      padding: 10px;
      margin: 10px 0;
      width: 100%;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.3s, color 0.3s;
    }

    .sidebar button:hover {
      background-color: #FFD700;
      color: #121212;
    }

    .content {
      flex-grow: 1;
      padding: 20px;
    }

    .search-bar {
      background-color: #2A2A2A;
      border: none;
      color: rgb(228, 227, 221);
      padding: 8px;
      width: 300px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Interface Administrateur</h1>
    <input type="text" class="search-bar" placeholder="Recherche...">
  </header>

  <div class="container">
    <div class="sidebar">
      <button onclick="location.href='/adminabonnes'">Gestion des abonnés</button>
      <button onclick="location.href='/adminlivres'">Gestion des livres</button>
      <button onclick="location.href='/adminexemplaires'">Gestion des exemplaires</button>
      <button onclick="location.href='/emprunt'">Gestion des emprunts</button>
      <button onclick="location.href='/adminretours'">Gestion des retours</button>
      <button onclick="location.href='/admindemandes'">Gestion des demandes</button>
    </div>
    <div class="content">
      <p>Bienvenue sur l'interface administrateur de la bibliothèque.</p>
      <p>Utilisez le menu à gauche pour accéder aux différentes fonctionnalités.</p>
    </div>
  </div>
</body>
</html>
