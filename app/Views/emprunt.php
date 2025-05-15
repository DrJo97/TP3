<h2>📚 Gestion des emprunts</h2>

<h3>➕ Enregistrer un nouvel emprunt</h3>

<form method="post" action="/emprunt/enregistrer">
  <label for="abonne">Abonné :</label>
  <select name="matricule_abonne" required>
    <option value="">-- Choisir un abonné --</option>
    <?php foreach ($abonnes as $a): ?>
      <option value="<?= $a['matricule_abonne'] ?>">
        <?= $a['matricule_abonne'] ?> - <?= $a['nom_abonne'] ?>
      </option>
    <?php endforeach ?>
  </select>

  <br><br>

  <label for="exemplaire">Exemplaire disponible :</label>
  <select name="cote_exemplaire" required>
    <option value="">-- Choisir un exemplaire --</option>
    <?php foreach ($exemplaires as $e): ?>
      <option value="<?= $e['cote_exemplaire'] ?>">
        <?= $e['cote_exemplaire'] ?>
      </option>
    <?php endforeach ?>
  </select>

  <br><br>

  <button type="submit">📥 Enregistrer</button>
</form>

<hr>

<h3>📋 Emprunts actifs</h3>

<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th>Matricule</th>
    <th>Nom abonné</th>
    <th>Cote exemplaire</th>
    <th>Date emprunt</th>
    <th>Date retour</th>
    <th>Renouvelé</th>
  </tr>

  <?php foreach ($emprunts as $e): ?>
    <tr>
      <td><?= $e['matricule_abonne'] ?></td>
      <td><?= $e['nom_abonne'] ?></td>
      <td><?= $e['cote_exemplaire'] ?></td>
      <td><?= $e['date_emprunt'] ?></td>
      <td><?= $e['date_retour'] ?? '—' ?></td>
      <td><?= $e['estRenouvele'] ? '✅' : '❌' ?></td>
    </tr>
  <?php endforeach ?>
</table>
