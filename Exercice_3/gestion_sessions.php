<?php
  // Je fixe le méta dans un encodage utf-8 pour les accents
  header('Content-Type:text/html; charset=UTF-8');
  
  function creer_utiliser_session() {
    // destroy_session();
    // print var_dump(isset($_POST['utilisateur']));

    if ( ( isset($_POST['utilisateur']) ) && strlen($_POST['utilisateur']) ) {
      session_start();
      $_SESSION["utilisateur"] = $_POST['utilisateur'];
      return true;
    } else {
      header('Location: login.php');
      exit();
    }
  }
  
  function utiliser_session() {
    if ( !isset($_SESSION["utilisateur"]) ) {
      session_start();
      return true;
    } else {
      header('Location: login.php');
      exit();
      return false;
    }
  }

  function destroy_session() {
    if ( !isset($_SESSION["utilisateur"]) ) {
      // var_dump(!isset($_SESSION["utilisateur"]));
      session_start();
      session_destroy();
      session_unset();
      print "Session détruite<br>";
    }
  }