<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un abonné</title>
</head>
<body>
    <h1>✏️ Modifier un abonné</h1>

    <form action="/adminabonneedit/<?= $abonne['matricule_abonne'] ?>" method="post">
        <p>Matricule : <?= $abonne['matricule_abonne'] ?></p>

        <label>Nom :</label>
        <input type="text" name="nom_abonne" value="<?= esc($abonne['nom_abonne']) ?>" required><br><br>

        <label>Date de naissance :</label>
        <input type="date" name="date_naissance_abonne" value="<?= esc($abonne['date_naissance_abonne']) ?>" required><br><br>

        <label>Date d'adhésion :</label>
        <input type="date" name="date_adhesion_abonne" value="<?= esc($abonne['date_adhesion_abonne']) ?>" required><br><br>

        <label>Adresse :</label>
        <input type="text" name="adresse_abonne" value="<?= esc($abonne['adresse_abonne']) ?>" required><br><br>

        <label>Téléphone :</label>
        <input type="text" name="telephone_abonne" value="<?= esc($abonne['telephone_abonne']) ?>" required><br><br>

        <label>CSP :</label>
        <input type="text" name="CSP_abonne" value="<?= esc($abonne['CSP_abonne']) ?>" required><br><br>

        <button type="submit">💾 Enregistrer les modifications</button>
    </form>

    <br>
    <button onclick="location.href='/adminabonnes'">⬅ Retour</button>
</body>
</html>
