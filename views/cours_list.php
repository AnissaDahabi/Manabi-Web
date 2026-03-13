<?php require_once __DIR__ . '/layout/header.php'; ?>

    <h2 class="page-titre">Cours disponibles</h2>

<?php if (empty($cours)) : ?>

    <p>Aucun cours disponible pour le moment.</p>

<?php else : ?>

    <div class="cours-grid">

        <?php foreach ($cours as $unCours) : ?>

            <div class="cours-card">
                <span class="cours-card-niveau"><?= $unCours['niveau'] ?></span>
                <h3><?= $unCours['intitule'] ?></h3>
                <p class="cours-card-description"><?= $unCours['description'] ?></p>
                <p class="cours-card-prof">Professeur : <span><?= $unCours['prenom'] . ' ' . $unCours['nom'] ?></span></p>
                <a href="index.php?page=cours&id=<?= $unCours['id'] ?>" class="cours-card-lien">Voir les sessions</a>
            </div>

        <?php endforeach; ?>

    </div>

<?php endif; ?>

<?php require_once __DIR__ . '/layout/footer.php'; ?>