<?php

  include("gestion_sessions.php");

  if ( creer_utiliser_session() )
  {
    echo "<br>Je suis connecté en tant que ". $_SESSION["utilisateur"]; 
    if (isset($_SESSION['image']) && strlen($_SESSION['image'])) {
      echo "<img src='fichiers/".$_SESSION['image']."''></img";
    }
  }
  ?>
  <!doctype html>
  
  <body>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="ajout_photo.php">Envoyer une photo</a></li>
        <li><a href="supprimer_photo.php">Supprimer une photo</a></li>
        <li><a href="close_session.php">Fermer sa session</a></li> 
    </nav>
  </body>