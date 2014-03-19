<?php

  include("gestion_sessions.php");

  // J'appelle la fonction qui réinitialise la variable de session lié à l'image
  supprimer_photo();

  header('Location: index.php');