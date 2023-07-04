    // Récupérer le lien de déconnexion
    var deconnexionLink = document.getElementById('deconnexion-link');
    
    // Ajouter un écouteur d'événement de clic sur le lien de déconnexion
    deconnexionLink.addEventListener('click', function() {
      // Rediriger vers la page de connexion de l'administrateur
      window.location.href = "connexion.php";
    });