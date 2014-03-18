<?php

  include("gestion_sessions.php");

  // Je ferme la session
  destroy_session();

  echo "<p><br/>Vous allez être redirigé vers la page de connexion dans 3 secondes !</p>";
  sleep(3);
  // Je demande à utiliser la session, mais comme elle n'exite plus renvoi vers la page de login
  creer_utiliser_session();