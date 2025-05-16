<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Livre</title>
</head>
<body>
    <h1>➕ Ajouter un Livre</h1>

    <form action="/adminlivresadd" method="post">
        <label>Code catalogue :</label><br>
        <input type="text" name="code_catalogue" required><br><br>

        <label>Titre :</label><br>
        <input type="text" name="titre_livre" required><br><br>

        <label>Thème :</label><br>
        <input type="text" name="theme_livre"><br><br>

        <label>État :</label><br>
        <input type="text" name="etat_livre"><br><br>

        <button type="submit">✅ Enregistrer</button>
    </form>

    <br>
    <button onclick="location.href='/adminlivres'">⬅ Retour à la liste</button>
</body>
</html>
