<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <div class="logo">
           <a href="../index.php"> <img src="../assets/img/logoMNS.PNG" alt="Logo MnsLoc"></a>
        </div>
        <div class="nom-site">
            <h1>MNS LOC</h1>
        </div>

    </header>

    <connect>
    <?php if (isset($message)) : ?>
        <p><?php echo htmlspecialchars($message); ?></p> <!-- Protection contre les attaques XSS -->
    <?php endif; ?>

    <div class="carte-connexion">
        <h2>Connexion</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="email">Email* :</label>
            <input type="email" id="email" name="email" placeholder="Veuillez entrer votre email..." required><br>

            <label for="mdp">Mot de passe* :</label>
            <input type="password" id="mdp" name="mdp" placeholder="Veuillez entrer votre mot de passe... " required><br>
            <p class="champs">* Champs obligatoires</p>

            <input type="submit" value="Se connecter"><br><br>
            <p class="NoAcount">Vous n'avez pas encore de compte ?</p><br>
            <p class="inscrivez-vous"><a href="../inscription.php" ><b>Inscrivez-vous !</b></a></p>
        </form>
    </div>
    </connect>
</body>

</html>