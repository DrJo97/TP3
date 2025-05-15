<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un abonné</title>
</head>
<body>
    <h1>➕ Ajouter un abonné</h1>

    <form method="post" action="/adminabonneadd">
        <label>Nom :</label>
        <input type="text" name="nom_abonne" required><br><br>

        <label>Date de naissance :</label>
        <input type="date" name="date_naissance_abonne" required><br><br>

        <label>Adresse :</label>
        <input type="text" name="adresse_abonne" required><br><br>

        <label>Téléphone :</label>
        <input type="text" name="telephone_abonne" required><br><br>

        <label>CSP :</label>
        <input type="text" name="CSP_abonne" required><br><br>

        <button type="submit">✅ Enregistrer</button>
    </form>

    <br>
    <a href="/adminabonnes">⬅ Retour à la liste</a>
</body>
</html>
