<?php

  include("gestion_sessions.php");

  if ( creer_utiliser_session() )
  {
    echo "<br>Je suis connecté ! : ". $_SESSION["utilisateur"]; 
  }