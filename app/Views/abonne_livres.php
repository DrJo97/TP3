<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livres disponibles</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        table { width: 80%; border-collapse: collapse; margin: auto; background: white; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h1>📚 Liste des livres</h1>
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
</body>
</html>
