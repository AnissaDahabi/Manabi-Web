<?php require_once __DIR__ . '/layout/header.php'; ?>

    <div style="margin-bottom: 2.5rem;">
        <h2 class="page-titre">Bonjour <?= $user['prenom'] ?></h2>
        <p style="color: var(--couleur-muted); font-size: 0.95rem;">Bienvenue sur votre espace Manabi! Que souhaitez-vous faire aujourd'hui ?</p>
    </div>

    <div class="dashboard-grid">
        <a href="index.php?page=cours" style="text-decoration: none;">
            <div class="cours-card" style="cursor: pointer;">
                <h3>Voir les cours</h3>
                <p class="cours-card-description">Parcourez les cours de japonais disponibles et consultez les sessions planifiées.</p>
                <span class="cours-card-lien">Accéder aux cours</span>
            </div>
        </a>

        <a href="index.php?page=reservations" style="text-decoration: none;">
            <div class="cours-card" style="cursor: pointer;">
                <h3>Mes réservations</h3>
                <p class="cours-card-description">Retrouvez toutes les sessions auxquelles vous êtes inscrit.</p>
                <span class="cours-card-lien">Voir mes réservations</span>
            </div>
        </a>

    </div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>