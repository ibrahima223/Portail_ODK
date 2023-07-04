<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
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
        <a href="#" class="nav-link">Inscription</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Liste des apprenants</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <h1>Formulaire d'inscription</h1>
    <form action="traitement_inscription.php" method="POST">
      <div class="form-column">
        <label for="matricule">Matricule :</label>
        <input type="text" id="matricule" name="matricule" required>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required>
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required>
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required>
        <label for="photo">Photo :</label>
        <input type="file" id="photo" name="photo" required>
      </div>
      <div class="form-column">
        <label for="promotion">Promotion :</label>
        <input type="text" id="promotion" name="promotion" required>
        <label for="annee_certification">Année de certification :</label>
        <input type="number" id="annee_certification" name="annee_certification" required>
      </div>
      <button type="submit" class="submit-button">Valider</button>
    </form>
  </div>
</body>
</html>
