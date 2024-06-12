<?php

require "../mnslocechec/template/inscription.html.php";

session_start();

// Configuration des erreurs pour un développement
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locmns";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("La connexion a échoué: " . $e->getMessage());
}

// Validation du mot de passe
function valider_mot_de_passe($mot_de_passe) {
    return preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*\W).{8,}$/', $mot_de_passe);
}

// Vérification de la méthode de requête POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et validation des données
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = $_POST['mdp'];

    if (!valider_mot_de_passe($mdp)) {
        $message = "Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.";
    } else {
        // Hashage du mot de passe
        $mdp_hache = password_hash($mdp, PASSWORD_BCRYPT);

        try {
            // Préparation de la requête d'insertion
            $stmt = $conn->prepare("INSERT INTO utilisateur (Prenom, Nom, Email, Telephone, mdp, Id_statut) VALUES (:prenom, :nom, :email, :telephone, :mdp, :id_statut)");
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mdp', $mdp_hache);

            // Utilisation d'une valeur valide pour Id_statut existante dans la table statut
            $id_statut = 2; // Par exemple, si le statut 2 existe dans la table statut
            $stmt->bindParam(':id_statut', $id_statut);

            // Exécution de la requête
            $stmt->execute();
            $message = "Nouvel utilisateur ajouté avec succès.";

            // Affichage du message de succès et redirection après 5 secondes
            echo "<p>$message</p>";
            echo "<p>Redirection vers l'accueil dans 5 secondes...</p>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 5000);
                  </script>";
        } catch(PDOException $e) {
            $message = "Erreur: " . $e->getMessage();
            echo "<p>$message</p>";
        }

        // Réinitialisation des valeurs du formulaire
        $_POST = array();
    }
}

// Fermeture de la connexion PDO
$conn = null;
