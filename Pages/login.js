// Validation du formulaire de connexion côté client
document.getElementById("login-form").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    if (username.trim() === "" || password.trim() === "") {
      event.preventDefault();
      alert("Veuillez remplir tous les champs.");
    }
  });
  