<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Informations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: rgb(255, 255, 253);
            margin: 0;
        }

        header {
            background-color: #1E1E1E;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        }

        .sidebar button:hover {
            background-color: #FFD700;
            color: #121212;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            background-color: #1E1E1E;
            color: #fff;
        }

        th, td {
            border: 1px solid #666;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2A2A2A;
        }

        .actions {
            margin-top: 20px;
        }

        .actions a {
            display: inline-block;
            padding: 10px 15px;
            background-color: #FFD700;
            color: #121212;
            text-decoration: none;
            border-radius: 4px;
        }

        .actions a:hover {
            background-color: #e6c200;
        }
    </style>
</head>
<body>
<header>
    <h1>Espace Abonné</h1>
</header>

<div class="container">
    <div class="sidebar">
        <button onclick="location.href='/abonne/livres'">📚 Liste des livres</button>
        <button onclick="location.href='/abonne/exemplaires'">📖 Exemplaires disponibles</button>
        <button onclick="location.href='/abonne/emprunts'">📘 Mes emprunts</button>
        <button onclick="location.href='/abonne/infos'">👤 Mes infos</button>
        <button onclick="location.href='/abonne-logout'">🚪 Déconnexion</button>
    </div>

    <div class="content">
        <h2>👤 Mes Informations</h2>
        <table>
            <tr>
                <th>Matricule</th>
                <td><?= esc($abonne['matricule_abonne']) ?></td>
            </tr>
            <tr>
                <th>Nom</th>
                <td><?= esc($abonne['nom_abonne']) ?></td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td><?= esc($abonne['date_naissance_abonne']) ?></td>
            </tr>
            <tr>
                <th>Date d'adhésion</th>
                <td><?= esc($abonne['date_adhesion_abonne']) ?></td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td><?= esc($abonne['adresse_abonne']) ?></td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td><?= esc($abonne['telephone_abonne']) ?></td>
            </tr>
            <tr>
                <th>CSP</th>
                <td><?= esc($abonne['CSP_abonne']) ?></td>
            </tr>
        </table>

        <div class="actions">
            <a href="/abonne/infos/modifier">✏️ Modifier mes infos</a>
        </div>
    </div>
</div>
</body>
</html>
