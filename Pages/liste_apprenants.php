<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des apprenants</title>
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
        <a href="#" class="nav-link">Liste des apprenants</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <h1>Liste des apprenants inscrits</h1>
    <table>
      <thead>
        <tr>
          <th>Matricule</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Âge</th>
          <th>Date de naissance</th>
          <th>Adresse e-mail</th>
          <th>Numéro de téléphone</th>
          <th>Photo</th>
          <th>Promotion</th>
          <th>Année de certification</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Connexion à la base de données (à adapter en fonction de votre configuration)
        $servername = "localhost";
        $username = "root";
        $password = " ";
        $dbname = "portail";

        // Créer une connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
          die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }

        // Récupérer les apprenants inscrits depuis la base de données
        $sql = "SELECT * FROM apprenants";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Afficher les apprenants inscrits dans le tableau
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['matricule'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['prenom'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['date_naissance'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telephone'] . "</td>";
            echo "<td>" . $row['photo'] . "</td>";
            echo "<td>" . $row['promotion'] . "</td>";
            echo "<td>" . $row['annee_certification'] . "</td>";
            echo "<td>";
            echo "<a href='modifier.php?id=" . $row['id'] . "'>Modifier</a>";
            echo " | ";
            echo "<a href='supprimer.php?id=" . $row['id'] . "'>Supprimer</a>";
            echo "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='11'>Aucun apprenant inscrit</td></tr>";
        }

        // Fermer la connexion à la base de données
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
