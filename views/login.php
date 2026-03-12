<html>
<head>
    <title>Login</title>
</head>
<body>
<div class="login-container">
    <h2>Connexion</h2>
    <form action="../controllers/login_controller.php" method="POST">
        <div>
            <label>Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Mot de passe:</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Connexion">
        </div>
        <?php if(!empty($error)) { ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php } ?>
    </form>
</div>
</body>
</html>