<?php

  include("gestion_sessions.php");

  if ( creer_utiliser_session() )
  {
    echo "<br>Je suis connecté ! : ". $_SESSION["utilisateur"]; 
  }
  ?>
  <!doctype html>
  
  <body>
    <nav>
      <ul>
        <li><a href="#">Envoyer une photo</a></li>
        <li><a href="#">Supprimer une photo</a></li>
        <li><a href="close_session.php">Fermer sa session</a></li> 
    </nav>
  </body>