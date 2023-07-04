<?php
include("config.php"); 
{
  // Récupérer les données du formulaire
  $matricule = $_POST['matricule'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $date_naissance = $_POST['date_naissance'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $photo = $_FILES['photo']['name']; // Le nom du fichier photo
  $promotion = $_POST['promotion'];
  $annee_certification = $_POST['annee_certification'];

  // Préparer la requête d'insertion des données dans la base de données
  $sql = "INSERT INTO apprenants (matricule, nom, prenom, age, date_naissance, email, telephone, photo, promotion, annee_certification) 
          VALUES ('$matricule', '$nom', '$prenom', '$age', '$date_naissance', '$email', '$telephone', '$photo', '$promotion', '$annee_certification')";

  // Exécuter la requête
  if ($conn->query($sql) === TRUE) {
    // Succès de l'insertion, rediriger vers une page de confirmation ou une autre page de votre choix
    header("Location: confirmation.php");
    exit();
  } else {
    // Erreur lors de l'insertion des données
    echo "Erreur : " . $sql . "<br>" . $conn->error;
  }

  // Fonction pour générer une matricule aléatoire
function genererMatricule($promotion) {
  // Générer 4 caractères aléatoires (chiffres et lettres mélangés)
  $caracteres = "0123456789abcdefghijklmnopqrstuvwxyz";
  $matricule = "";
  for ($i = 0; $i < 4; $i++) {
      $randomIndex = mt_rand(0, strlen($caracteres) - 1);
      $matricule .= $caracteres[$randomIndex];
  }

  // Ajouter le préfixe correspondant à la promotion
  $matricule = $promotion . $matricule;

  return $matricule;
}

// Exemple d'utilisation
$promotion = "P1"; // Remplacez par le préfixe de la promotion réelle
$matricule = genererMatricule($promotion);
echo "Matricule généré : " . $matricule;


  // Fermer la connexion à la base de données
  $conn->close();
}
?>
