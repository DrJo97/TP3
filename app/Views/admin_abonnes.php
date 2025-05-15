<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des abonnés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            background-color: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
        .actions {
            margin-top: 20px;
        }
        .actions button {
            padding: 10px 15px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>📚 Abonnés enregistrés</h1>

    <table>
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($abonnes as $abonne): ?>
                <tr>
                    <td><?= esc($abonne['matricule_abonne']) ?></td>
                    <td><?= esc($abonne['nom_abonne']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div class="actions">
        <button onclick="location.href='/admin'">⬅ Retour admin</button>
        <button onclick="location.href='/adminabonneadd'">➕ Ajouter un abonné</button>
    </div>

</body>
</html>
