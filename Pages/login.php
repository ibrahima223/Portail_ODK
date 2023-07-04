<?php
include ("config.php");
// Vérification des informations de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Vérification des informations de connexion dans la base de données (à adapter en fonction de votre configuration)
  if ($username === "admin" && $password == "admin") {
    // Redirection vers la page d'accueil
    header("Location: accueil.php");
    exit();
  } else {
    // Mauvaises informations de connexion
    echo "Nom d'utilisateur ou mot de passe incorrect.";
  }
}
?>
