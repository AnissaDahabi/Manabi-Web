<?php require_once __DIR__ . '/layout/header.php'; ?>

    <h2 class="page-titre">Cours disponibles</h2>

    <form method="GET" action="index.php" class="recherche-wrapper">
        <input type="hidden" name="page" value="cours">
        <input
                type="text"
                name="recherche"
                class="recherche-input"
                placeholder="Rechercher un cours, un niveau, un professeur..."
                value="<?= htmlspecialchars($recherche) ?>"
        >
        <button type="submit" class="btn-reserver">Rechercher</button>
    </form>

<?php if (!empty($recherche)) : ?>
    <p style="font-size: 0.88rem; color: var(--couleur-muted); margin-bottom: 1rem;">
        Résultats pour : <strong><?= htmlspecialchars($recherche) ?></strong>
    </p>
<?php endif; ?>

<?php if (empty($cours)) : ?>

    <p style="color: var(--couleur-muted);">Aucun cours ne correspond à votre recherche.</p>

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