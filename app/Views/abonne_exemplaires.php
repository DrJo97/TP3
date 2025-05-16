<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>📖 Exemplaires disponibles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }

        a.back {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 12px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
        }

        a.back:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <h1>📖 Exemplaires disponibles</h1>

    <table>
        <thead>
            <tr>
                <th>Cote Exemplaire</th>
                <th>Titre du Livre</th>
                <th>Nom Éditeur</th>
                <th>Usure</th>
                <th>Date d’acquisition</th>
                <th>Emplacement</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exemplaires as $ex) : ?>
                <tr>
                    <td><?= esc($ex['cote_exemplaire']) ?></td>
                    <td><?= esc($ex['titre_livre']) ?></td>
                    <td><?= esc($ex['nom_editeur']) ?></td>
                    <td><?= esc($ex['code_usure']) ?></td>
                    <td><?= esc($ex['date_acquisition']) ?></td>
                    <td><?= esc($ex['emplacement_rayon']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/abonne" class="back">⬅ Retour à l’espace abonné</a>

</body>
</html>
