<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        #admin_code_div {
            display: none;
        }
    </style>
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

    <div class="carte-inscription">
        <h2>Inscription</h2>

        <label for="admin">
            <input type="checkbox" id="admin" name="admin">
            S'inscrire en tant qu'administrateur
        </label><br>

        <div id="admin_code_div">
            <label for="admin_code">Code Administrateur :</label>
            <input type="text" id="admin_code" name="admin_code">
        </div>

        <form action="traitement_inscription.php" method="post" onsubmit="return validateForm()">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom..." required>
            <span id="prenomError" class="error"></span>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom...">
            <span id="nomError" class="error"></span>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Email..." required>
            <span id="emailError" class="error"></span>

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" placeholder="+33..." required>
            <span id="telephoneError" class="error"></span>

            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="mdp" placeholder="Veuillez indiquer votre mot de passe" required>
            <span id="mdpError" class="error"></span>

            <label for="confirmationmotdepasse">Confirmation du mot de passe :</label>
            <input type="password" id="confirmationmotdepasse" name="confirmationmdp" placeholder="Veuillez confirmer votre mot de passe" required>
            <span id="confirmationmdpError" class="error"></span>

            
            <label for="motdepasse">Confirmer mot de passe :</label>
                <input type="password" id="motdepasse" name="mdp" placeholder="Veuillez entrer à nouveau votre mot de passe" required>
                <span id="mdpError" class="error"></span>
                <input type="submit" value="S'inscrire">
                <p class="NoAcount">Vous avez déjà un compte ?</p><br>
                <p class="inscrivez-vous"><a href="../connexion.php"><b>Connectez-vous !</b></a></p>
            
        </form>
    </div>

    <script src="../assets/javascript/inscription_admin.js"></script>
</body>

</html>
