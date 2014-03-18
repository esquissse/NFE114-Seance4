<?php
  
  function creer_utiliser_session() {
    // print var_dump(isset($_POST['utilisateur']));

    if ( ! isset($_POST['utilisateur']) || strlen($_POST['utilisateur']) ) {
      session_start();
      $_SESSION["utilisateur"] = $_POST['utilisateur'];
      return true;
    } else {
      header('Location: login.php');
      exit();
    }
  }
  
  function destroy_session() {
    print "Session détruite<br>";
    session_destroy();
  }