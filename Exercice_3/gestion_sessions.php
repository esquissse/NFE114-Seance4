<?php
  // Je fixe le méta dans un encodage utf-8 pour les accents
  header('Content-Type:text/html; charset=UTF-8');
  
  // Fonction qui créé et permet de véhiculer les variables de session tout au long des pages
  function creer_utiliser_session() {
    
    session_start();
    
    if ( ( isset($_POST['utilisateur']) ) && strlen($_POST['utilisateur']) || strlen($_SESSION['utilisateur']) ) {
      if ( $_POST['utilisateur'] != "") {
        $_SESSION["utilisateur"] = $_POST['utilisateur'];
      }
      return true;
    } else {
      header('Location: login.php');
      exit();
    }
  }
  
  // Fonction qui réinitialise la variable de session utilisateur
  function destroy_session() {
    session_start();
    $_SESSION['utilisateur']="";
  }

  // Fonction qui réinitialise la variable de session image
  function supprimer_photo()
  {
    session_start();
    $_SESSION['image']= "";
  }