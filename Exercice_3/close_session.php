<?php

  include("gestion_sessions.php");

  // Je ferme la session
  destroy_session();

  // sleep(3);
  // echo "<p><br/>Vous allez être redirigé vers la page de connexion dans 3 secondes !</p>";
  // // Je demande à utiliser la session, mais comme elle n'exite plus renvoi vers la page de login
  // creer_utiliser_session();
  header('Location: login.php');