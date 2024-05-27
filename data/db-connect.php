<?php

$host = 'localhost'; // Nom de l'hôte où se trouve la base de données MySQL
$user = 'root'; // Nom de l'utilisateur de la base de données
$password = ''; // Mot de passe de l'utilisateur de la base de données
$dbName = 'locmns'; // Nom de la base de données à laquelle se connecter

try {
    // Tentative de connexion à la base de données en utilisant PDO
    $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Définition du mode de récupération par défaut des données comme un tableau associatif
    ]);
} catch (PDOException $e) {
    // En cas d'échec de la connexion, capturer l'exception PDOException et afficher un message d'erreur
    echo "Error: " . $e->getMessage();
    // Terminer l'exécution du script
    die;
}