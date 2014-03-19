<?php

  include("gestion_sessions.php");

  if ( creer_utiliser_session() )
  {
    echo "<br>Je suis connecté en tant que ". $_SESSION["utilisateur"]; 
  }
  ?>
  <!doctype html>
  
  <body>
    <nav>
      <ul>
        <li><a href="ajout_photo.php">Envoyer une photo</a></li>
        <li><a href="#">Supprimer une photo</a></li>
        <li><a href="close_session.php">Fermer sa session</a></li> 
    </nav>
  </body>