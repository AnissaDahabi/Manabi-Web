<?php require_once __DIR__ . '/layout/header.php'; ?>

    <div class="login-wrapper">
        <div class="login-card">

            <div class="login-header">
                <h1>学</h1>
                <h2>Manabi</h2>
                <p>Connectez-vous à votre espace élève</p>
            </div>

            <?php if ($erreur): ?>
                <div class="alert alert-error">
                    <?= htmlspecialchars($erreur) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="index.php?page=login">

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input
                            type="password"
                            id="password"
                            name="password"
                            required
                    >
                </div>

                <button type="submit" class="btn-primary">Se connecter</button>

            </form>

        </div>
    </div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>