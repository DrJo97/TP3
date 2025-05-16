<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un exemplaire</title>
</head>
<body>
    <h1>➕ Ajouter un exemplaire</h1>

    <form action="/adminexemplaireadd" method="post">
        <label for="nom_editeur">Nom éditeur :</label>
        <input type="text" name="nom_editeur" required><br><br>

        <label for="code_usure">Code usure :</label>
        <input type="text" name="code_usure" required><br><br>

        <label for="date_acquisition">Date d'acquisition :</label>
        <input type="date" name="date_acquisition" required><br><br>

        <label for="emplacement_rayon">Emplacement rayon :</label>
        <input type="text" name="emplacement_rayon" required><br><br>

        <label for="code_catalogue">Code catalogue (livre associé) :</label>
        <input type="text" name="code_catalogue" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>

    <br>
    <button onclick="location.href='/adminexemplaires'">⬅ Retour à la liste</button>
</body>
</html>
