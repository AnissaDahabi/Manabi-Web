<?php require_once __DIR__ . '/layout/header.php'; ?>

    <a href="index.php?page=cours" class="retour-lien">← Retour aux cours</a>

    <div class="cours-detail-header">
        <span class="cours-card-niveau"><?= $cours['niveau'] ?></span>
        <h2><?= $cours['intitule'] ?></h2>
        <p style="margin: 0.75rem 0; color: var(--couleur-muted); font-size: 0.92rem;"><?= $cours['description'] ?></p>
        <div class="cours-detail-meta">
            <p>Professeur : <span><?= $cours['prenom'] . ' ' . $cours['nom'] ?></span></p>
        </div>
    </div>

    <h3 class="sessions-titre">Sessions disponibles</h3>

<?php if (empty($sessions)) : ?>

    <p>Aucune session planifiée pour ce cours.</p>

<?php else : ?>

    <table class="sessions-table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Professeur</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($sessions as $session) : ?>
            <tr>
                <td><?= date('d/m/Y', strtotime($session['date_session'])) ?></td>
                <td><?= substr($session['heure_debut'], 0, 5) ?></td>
                <td><?= substr($session['heure_fin'], 0, 5) ?></td>
                <td><?= $session['prenom'] . ' ' . $session['nom'] ?></td>
                <td>
                    <form method="POST" action="index.php?page=reservations">
                        <input type="hidden" name="id_session" value="<?= $session['id'] ?>">
                        <button type="submit" class="btn-reserver">Réserver</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<?php require_once __DIR__ . '/layout/footer.php'; ?>