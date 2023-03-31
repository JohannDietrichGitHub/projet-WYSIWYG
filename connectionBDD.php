<?php 

// Connexion à la base de données
  $host = "localhost"; // remplacer par votre hôte
  $username = "root"; // remplacer par votre nom d'utilisateur
  $password = "aaaa"; // remplacer par votre mot de passe
  $dbname = "WYSIWYG"; // remplacer par le nom de votre base de données
  $conn = new mysqli($host, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
  }
?>