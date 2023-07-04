<?php
include("config.php"); {
  // Supprimer l'apprenant de la base de données
  $query = "DELETE FROM apprenants WHERE id = $apprenant_id";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // Rediriger vers la liste des apprenants après la suppression
    header("Location: liste_apprenants.php");
    exit();
  } else {
    echo "Erreur lors de la suppression de l'apprenant.";
  }

  // Fermer la connexion à la base de données
  mysqli_close($conn);
} else {
  // Rediriger vers la liste des apprenants si l'identifiant n'est pas fourni
  header("Location: liste_apprenants.php");
  exit();
}
?>
