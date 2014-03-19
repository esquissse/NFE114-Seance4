<?php
  include('gestion_sessions.php');
  session_start();
  if ( creer_utiliser_session() ) {
    echo "<br>Je suis connecté en tant que ". $_SESSION["utilisateur"]."<br>"; 
    if (isset($_SESSION['image']) && strlen($_SESSION['image']) ) {
      echo "<img src='fichiers/".$_SESSION['image']."''></img";
    }
  }
  
  $rep_dest = "fichiers/";
  // echo "fichiers/<br>";
  echo "<br>";
  if ( isset($_POST['une_image'])) {
    echo $_POST['une_image']+"<br>";
  }
  // var_dump(isset($_POST['une_image']));
  echo "<br>";
  if ( !isset($_POST['une_image']) ) {
    if(move_uploaded_file($_FILES['une_image']['tmp_name'],$rep_dest . $_FILES['une_image']['name']))
    {
      print"Le fichier \"".$_FILES["une_image"]["name"]."\" a bien été téléchargé.";
      $_SESSION['image'] = $_FILES["une_image"]["name"];
    } else {
      print"Echec du téléchargement.";
    } 
  } else {
    print "";
  }
?>
<!doctype html>
<html>
  <head>
    <title>Ajouter une image</title>
  </head>
  
  <body>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="ajout_photo.php">Envoyer une photo</a></li>
        <li><a href="supprimer_photo.php">Supprimer une photo</a></li>
        <li><a href="close_session.php">Fermer sa session</a></li> 
    </nav>
    <form method="post" enctype="multipart/form-data" action="ajout_photo.php">
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
      <input type="file" name="une_image" />
      <input type="submit" value="uploader"/>
    </form>
  </body>

</html>