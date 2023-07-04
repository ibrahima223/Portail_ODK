<?php
// Informations de connexion à la base de données
$host = 'localhost';
$db_name = 'gestion_etudiants';
$username = 'root';
$password = '';

try {
    // Création de l'objet PDO pour la connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);

    // Configuration des attributs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activation des rapports d'erreurs
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Désactivation de l'émulation des requêtes préparées

} catch (PDOException $e) {
    // En cas d'erreur de connexion
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    die();
}
