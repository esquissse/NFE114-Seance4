<!doctype html>
<html lang="en">
  <head>
    <title>Site web fonctionnant avec les sessions</title>
    <meta charset="utf-8"/>
    <?php include('gestion_sessions.php'); destroy_session(); ?>
  </head>

  <body>
    <div id="connexion">
      <form method="post" action="index.php">
        <label>Nom d'utilisateur</label>
        <input type="text" name="utilisateur"/>
        <input type="submit" value="Connexion"/>
      </form>
    </div>
  </body>

</html>