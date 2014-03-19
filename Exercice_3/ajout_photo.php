<?php
  include('gestion_sessions.php');
  if ( utiliser_session() ) {
    echo "<br>Je suis connecté en tant que ". $_SESSION["utilisateur"]; 
  }
  
  $rep_dest="fichiers/";
  if ( isset($_POST['une_image']) ) {
    if(move_uploaded_file($_FILES['une_image']['tmp_name'],$rep_dest . $_FILES['une_image']['name']))
    {
      print"Le fichier \"".$_FILES["une_image"]["name"]."\" a bien été téléchargé.";
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
    <form method="post" enctype="multipart/form-data" action="ajout_photo.php">
      <input type="hidden" name="MAX_FILE_SIZE" value="1024">
      <input type="file" name="une_image" />
      <input type="submit" value="uploader"/>
    </form>
  </body>

</html>