<?php require_once __DIR__ . '/layout/header.php'; ?>

    <div class="login-wrapper">
        <div class="login-card">

            <div class="login-header">
                <h1>学</h1>
                <h2>Manabi</h2>
                <p>Inscrivez-vous pour accéder à votre espace élève</p>
            </div>

            <?php if (isset($erreur)) : ?>
                <div class="alert alert-error">
                    <?= $erreur ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="index.php?page=register">

                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required autofocus>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="btn-primary">S'inscrire</button>

            </form>

            <p style="text-align:center; margin-top:1rem; font-size:0.88rem; color:var(--couleur-muted);">
                Déjà inscrit ? <a href="index.php?page=login">Se connecter</a>
            </p>

        </div>
    </div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>