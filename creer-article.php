<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];
  
  require_once('connectionBDD.php');
  
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