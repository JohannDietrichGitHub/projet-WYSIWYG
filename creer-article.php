<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];
  
  // Connexion à la base de données
  $host = "localhost"; // remplacer par votre hôte
  $username = "votre_nom_d_utilisateur"; // remplacer par votre nom d'utilisateur
  $password = "votre_mot_de_passe"; // remplacer par votre mot de passe
  $dbname = "nom_de_votre_base_de_donnees"; // remplacer par le nom de votre base de données
  $conn = new mysqli($host, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
  }
  
  // Échapper les données pour éviter les injections SQL
  $titre = $conn->real_escape_string($titre);
  $contenu = $conn->real_escape_string($contenu);
  
  // Insérer les données dans la base de données
  $sql = "INSERT INTO articles (titre, contenu, date_creation) VALUES ('$titre', '$contenu', NOW())";
  if ($conn->query($sql) === TRUE) {
    echo "Article enregistré avec succès !";
  } else {
    echo "Erreur lors de l'enregistrement de l'article : " . $conn->error;
  }
  
  // Fermer la connexion
  $conn->close();
}
?>