<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des emprunts</title>
</head>
<body>

<h2>➕ Enregistrer un nouvel emprunt</h2>
<form method="post" action="/adminempruntenregistrer">
    <label>Abonné :</label>
    <select name="matricule_abonne" required>
        <option value="">-- Choisir un abonné --</option>
        <?php foreach ($abonnes as $a): ?>
            <option value="<?= esc($a['matricule_abonne']) ?>">
                <?= esc($a['matricule_abonne']) ?> - <?= esc($a['nom_abonne']) ?>
            </option>
        <?php endforeach ?>
    </select><br><br>

    <label>Exemplaire disponible :</label>
    <select name="cote_exemplaire" required>
        <option value="">-- Choisir un exemplaire --</option>
        <?php foreach ($exemplaires as $e): ?>
            <option value="<?= esc($e['cote_exemplaire']) ?>">
                <?= esc($e['cote_exemplaire']) ?>
            </option>
        <?php endforeach ?>
    </select><br><br>

    <button type="submit">📌 Enregistrer</button>
</form>

<h2>📋 Emprunts actifs</h2>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom abonné</th>
            <th>Code catalogue</th>
            <th>Titre</th>
            <th>Date emprunt</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($emprunts as $em): ?>
            <tr>
                <td><?= esc($em['matricule_abonne']) ?></td>
                <td><?= esc($em['nom_abonne']) ?></td>
                <td><?= esc($em['code_catalogue']) ?></td>
                <td><?= esc($em['titre_livre']) ?></td>
                <td><?= esc($em['date_emprunt']) ?></td>
                <td>
                    <form method="get" action="/adminempruntsupprimer" onsubmit="return confirm('Confirmer la suppression ?');">
                        <input type="hidden" name="matricule_abonne" value="<?= esc($em['matricule_abonne']) ?>">
                        <input type="hidden" name="cote_exemplaire" value="<?= esc($em['cote_exemplaire']) ?>">
                        <input type="hidden" name="date_emprunt" value="<?= esc($em['date_emprunt']) ?>">
                        <button type="submit">🗑 Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

</body>
</html>
