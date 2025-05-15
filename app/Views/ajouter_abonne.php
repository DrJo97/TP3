<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un abonné</title>
</head>
<body>
    <h1>➕ Ajouter un abonné</h1>

    <form method="post" action="/adminabonneadd">
        <label>Matricule :</label>
        <input type="number" name="matricule" required><br><br>

        <label>Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label>Date de naissance :</label>
        <input type="date" name="date_naissance" required><br><br>

        <label>Date d'adhésion :</label>
        <input type="date" name="date_adhesion" required><br><br>

        <label>Adresse :</label>
        <input type="text" name="adresse" required><br><br>

        <label>Téléphone :</label>
        <input type="text" name="telephone" maxlength="10" required><br><br>

        <label>CSP :</label>
        <input type="text" name="csp" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>

    <br>
    <a href="/adminabonnes">⬅ Retour à la liste des abonnés</a>
</body>
</html>
