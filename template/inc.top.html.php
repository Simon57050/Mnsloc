<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Location de Matériel Informatique</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/javascript/dropdown.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="../assets/img/logoMNS.PNG" alt="Logo MnsLoc">
        </div>
        <div class="nom-site">
            <h1>MNS LOC</h1>
        </div>
        <div class="boutons">
            <a href="inscription.php">Inscription</a>
            <a href="connexion.php">Connexion</a>
        </div>
        <div class="icon">
            <img src="../assets/img/utilisateur.png" alt="Icône utilisateur">
        </div>
    </header>
    <nav>
        <ul>
            <li class="dropdown">
                <button class="dropbtn" id="categorie" >Catégories &#9662;</button>
                <div class="dropdown-content">
                    <a href="#">Option 1</a>
                    <a href="#">Option 2</a>
                    <a href="#">Option 3</a>
                    <a href="#">Option 4</a>
                    <a href="#">Option 5</a>
                    <a href="#">Option 6</a>
                </div>
            </li>

            <li>
                <input type="text" placeholder="Votre recherche...">
                <button type="submit">Rechercher</button>
            </li>
            <li class="dropdown">
                <button class="dropbtn" id="menu">Menu &#9662;</button>
                <div class="dropdown-content">
                    <a href="#">Option 1</a>
                    <a href="#">Option 2</a>
                    <a href="#">Option 3</a>
                    <a href="#">Option 4</a>
                </div>
            </li>
        </ul>
    </nav>
    
    <main>