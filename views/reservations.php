<?php require_once __DIR__ . '/layout/header.php'; ?>

    <h2 class="page-titre">Mes réservations</h2>

<?php if (isset($message)) : ?>
    <div class="alert alert-<?= $type ?>">
        <?= $message ?>
    </div>
<?php endif; ?>

<?php if (empty($reservations)) : ?>

    <p style="color: var(--couleur-muted);">Vous n'avez pas encore de réservation.</p>
    <a href="index.php?page=cours" class="cours-card-lien" style="margin-top: 1rem; display: inline-block;">Voir les cours</a>

<?php else : ?>

    <table class="sessions-table">
        <thead>
        <tr>
            <th>Cours</th>
            <th>Niveau</th>
            <th>Date</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Professeur</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?= $reservation['intitule_cours'] ?></td>
                <td><span class="cours-card-niveau"><?= $reservation['niveau'] ?></span></td>
                <td><?= date('d/m/Y', strtotime($reservation['date_session'])) ?></td>
                <td><?= substr($reservation['heure_debut'], 0, 5) ?></td>
                <td><?= substr($reservation['heure_fin'], 0, 5) ?></td>
                <td><?= $reservation['prenom'] . ' ' . $reservation['nom'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<?php require_once __DIR__ . '/layout/footer.php'; ?>