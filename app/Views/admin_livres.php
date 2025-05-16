<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Livres</title>
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
            width: 90%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 20px;
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

    <h1>📚 Livres enregistrés</h1>

    <table>
        <thead>
            <tr>
                <th>Code catalogue</th>
                <th>Titre</th>
                <th>Thème</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livres as $livre): ?>
                <tr>
                    <td><?= esc($livre['code_catalogue']) ?></td>
                    <td><?= esc($livre['titre_livre']) ?></td>
                    <td><?= esc($livre['theme_livre']) ?></td>
                    <td><?= esc($livre['etat_livre']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div class="actions">
        <button onclick="location.href='/admin'">⬅ Retour admin</button>
        <button onclick="location.href='/adminlivresadd'">➕ Ajouter un livre</button>
    </div>

</body>
</html>
