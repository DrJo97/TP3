<h2>📘 Mes emprunts en cours</h2>

<?php if (session('message')): ?>
    <p style="color:green"><?= session('message') ?></p>
<?php endif ?>

<?php if (session('error')): ?>
    <p style="color:red"><?= session('error') ?></p>
<?php endif ?>

<?php if (empty($emprunts)): ?>
    <p>Aucun emprunt en cours.</p>
<?php else: ?>
    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>Code</th>
                <th>Titre</th>
                <th>Cote</th>
                <th>Date emprunt</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprunts as $e): ?>
                <tr>
                    <td><?= esc($e['code_catalogue']) ?></td>
                    <td><?= esc($e['titre_livre']) ?></td>
                    <td><?= esc($e['cote_exemplaire']) ?></td>
                    <td><?= esc($e['date_emprunt']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>

<h3>📝 Faire une demande d'emprunt</h3>
<form method="post" action="/abonne/emprunts/demander">
    <label>Choisir un exemplaire disponible :</label>
    <select name="cote_exemplaire" required>
        <option value="">-- Sélectionner --</option>
        <?php foreach ($exemplaires as $ex): ?>
            <option value="<?= esc($ex['cote_exemplaire']) ?>">
                <?= esc($ex['titre_livre']) ?> (<?= esc($ex['code_catalogue']) ?> - <?= esc($ex['cote_exemplaire']) ?>)
            </option>
        <?php endforeach ?>
    </select>
    <button type="submit">📤 Demander</button>
</form>
