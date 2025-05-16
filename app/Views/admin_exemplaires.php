<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des exemplaires</title>
    <style>
        body { font-family: Arial; background-color: #f4f4f4; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background-color: white; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background-color: #eee; }
    </style>
</head>
<body>

<h1>📦 Exemplaires enregistrés</h1>

<table>
    <thead>
        <tr>
            <th>Cote</th>
            <th>Éditeur</th>
            <th>Code usure</th>
            <th>Date acquisition</th>
            <th>Rayon</th>
            <th>Catalogue</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($exemplaires as $e): ?>
            <tr>
                <td><?= esc($e['cote_exemplaire']) ?></td>
                <td><?= esc($e['nom_editeur']) ?></td>
                <td><?= esc($e['code_usure']) ?></td>
                <td><?= esc($e['date_acquisition']) ?></td>
                <td><?= esc($e['emplacement_rayon']) ?></td>
                <td><?= esc($e['code_catalogue']) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div class="actions" style="margin-top: 20px;">
    <button onclick="location.href='/adminexemplaireadd'" style="padding: 10px 15px; font-size: 16px; cursor: pointer;">
        ➕ Ajouter un exemplaire
    </button>
</div>

</body>
</html>
