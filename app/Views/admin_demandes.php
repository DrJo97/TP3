<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des demandes</title>
</head>
<body>
    <h2>📋 Demandes d'emprunt</h2>

    <?php if (session('message')): ?>
        <p style="color:green"><?= session('message') ?></p>
    <?php endif ?>

    <?php if (session('error')): ?>
        <p style="color:red"><?= session('error') ?></p>
    <?php endif ?>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>Abonné</th>
                <th>Exemplaire</th>
                <th>Livre</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandes as $d): ?>
                <tr>
                    <td><?= esc($d['matricule_abonne']) ?> - <?= esc($d['nom_abonne']) ?></td>
                    <td><?= esc($d['cote_exemplaire']) ?></td>
                    <td><?= esc($d['titre_livre']) ?></td>
                    <td><?= esc($d['date_demande']) ?></td>
                    <td>
                        <a href="/admindemandes/valider/<?= $d['id'] ?>">✅ Valider</a> |
                        <a href="/admindemandes/supprimer/<?= $d['id'] ?>" onclick="return confirm('Supprimer cette demande ?')">🗑 Supprimer</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
