<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Admin</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #121212;
      color: #FFD700; /* Doré */
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
      border: 1px solid #FFD700;
      color: #FFD700;
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
      color: #FFD700;
      padding: 8px;
      width: 300px;
    }
</style>
</head>
<body>
  <header>
    <h1>Page </h1>
    <input type="text" class="search-bar" placeholder="Recherche...">
  </header>

  <div class="container">
    <div class="sidebar">
      <button onclick="showContent('abonnes')">Gestion des abonnés</button>
      <button onclick="showContent('livres')">Gestion des livres</button>
      <button onclick="showContent('exemplaires')">Gestion des exemplaires</button>
      <button onclick="showContent('emprunts')">Gestion des emprunts</button>
      <button onclick="showContent('retours')">Gestion des retours</button>
      <button onclick="showContent('demandes')">Gestion des demandes</button>
    </div>
    <div class="content" id="mainContent">
      <p>Bienvenue sur l'interface administrateur de la bibliothèque.</p>
    </div>
  </div>

  <script>
    function showContent(section) {
      const content = {
        'abonnes': '<h2>Gestion des abonnés</h2><p>Ici vous pouvez consulter, ajouter ou modifier les abonnés.</p>',
        'livres': '<h2>Gestion des livres</h2><p>Ajoutez un livre avec son auteur et mots-clés si nécessaire.</p>',
        'exemplaires': '<h2>Gestion des exemplaires</h2><p>Ajoutez ou consultez les exemplaires existants.</p>',
        'emprunts': '<h2>Gestion des emprunts</h2><p>Gérez les emprunts des livres.</p>',
        'retours': '<h2>Gestion des retours</h2><p>Suivez les retours de livres.</p>',
        'demandes': '<h2>Gestion des demandes</h2><p>Consultez et traitez les demandes des usagers.</p>'
      };
      document.getElementById('mainContent').innerHTML = content[section];
    }
  </script>
</body>
</html>