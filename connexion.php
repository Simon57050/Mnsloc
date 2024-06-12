<?php



require "../mnslocechec/template/connexion.html.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $host = 'localhost';
    $dbname = 'locmns';
    $username = 'root';
    $password = '';

    try {
        $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = $connexion->prepare("SELECT * FROM utilisateur WHERE Email = :email");
        $requete->bindParam(':email', $email);
        $requete->execute();

        if ($requete->rowCount() > 0) {
            $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

            if (password_verify($mdp, $utilisateur['mdp'])) {
                $_SESSION['utilisateur'] = [
                    'id' => $utilisateur['Id_utilisateur'],
                    'prenom' => $utilisateur['Prenom'],
                    'nom' => $utilisateur['Nom'],
                    'email' => $utilisateur['Email'],
                    'telephone' => $utilisateur['Telephone'],
                    'statut' => $utilisateur['Id_statut'],
                    'role' => $utilisateur['role']
                ];

                if ($utilisateur['role'] == 'admin') {
                    header('Location: admin_accueil.php');
                } else {
                    header('Location: bienvenue.php');
                }
                exit();
            } else {
                $message = "Identifiants incorrects.";
            }
        } else {
            $message = "Identifiants incorrects.";
        }
    } catch (PDOException $e) {
        $message = "Erreur : " . $e->getMessage();
    }
}
