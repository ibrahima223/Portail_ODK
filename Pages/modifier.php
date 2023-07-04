<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier un apprenant</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-brand">Mon Portail</div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="#" class="nav-link">Déconnexion</a>
      </li>
      <li class="nav-item">
        <a href="inscription.php" class="nav-link">Inscription</a>
      </li>
      <li class="nav-item">
        <a href="liste_apprenants.php" class="nav-link">Liste des apprenants</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <h1>Modifier un apprenant</h1>
    <?php
    include ("config.php");
    {
      // Récupérer les données de l'apprenant à partir de la base de données
      $query = "SELECT * FROM apprenants WHERE id = $apprenant_id";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        $apprenant = mysqli_fetch_assoc($result);

        // Afficher le formulaire de modification pré-rempli avec les données de l'apprenant
        ?>
        <form action="traitement_modifier.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $apprenant['id']; ?>">
          <label for="matricule">Matricule :</label>
          <input type="text" name="matricule" id="matricule" value="<?php echo $apprenant['matricule']; ?>"><br>

          <label for="nom">Nom :</label>
          <input type="text" name="nom" id="nom" value="<?php echo $apprenant['nom']; ?>"><br>

          <label for="prenom">Prénom :</label>
          <input type="text" name="prenom" id="prenom" value="<?php echo $apprenant['prenom']; ?>"><br>

          <label for="age">Âge :</label>
          <input type="text" name="age" id="age" value="<?php echo $apprenant['age']; ?>"><br>

          <label for="date_naissance">Date de naissance :</label>
          <input type="text" name="date_naissance" id="date_naissance" value="<?php echo $apprenant['date_naissance']; ?>"><br>

          <label for="email">Adresse e-mail :</label>
          <input type="email" name="email" id="email" value="<?php echo $apprenant['email']; ?>"><br>

          <label for="telephone">Numéro de téléphone :</label>
          <input type="text" name="telephone" id="telephone" value="<?php echo $apprenant['telephone']; ?>"><br>

          <label for="photo">Photo :</label>
          <input type="file" name="photo" id="photo"><br>

          <label for="promotion">Promotion :</label>
          <input type="text" name="promotion" id="promotion" value="<?php echo $apprenant['promotion']; ?>"><br>

          <label for="annee_certification">Année de certification :</label>
          <input type="text" name="annee_certification" id="annee_certification" value="<?php echo $apprenant['annee_certification']; ?>"><br>

          <input type="submit" value="Modifier">
        </form>
        <?php
      } else {
        echo "Apprenant non trouvé.";
      }

      // Fermer la connexion à la base de données
      mysqli_close($conn);
    } else {
      // Rediriger vers la liste des apprenants si l'identifiant n'est pas fourni
      header("Location: liste_apprenants.php");
      exit();
    }
    ?>
  </div>
</body>
</html>
