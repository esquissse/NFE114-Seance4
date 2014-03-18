<?php

  $n = $_POST['nb_depart'];
  $compteur = 0;

  if ( isset($n) && $n>0 ) {
    
    while ( 1 != $n ) {
      
      if ( 0 == $n %2 ) {
        $n /= 2;
        echo $n. " ";
      } else {
        $n = 3*$n + 1;
        echo $n. " ";
      }
      $compteur++;
    }
    
    echo "<br/>Il y aura fallut ". $compteur . " saut(s) pour terminer la suite de Syracuse.";
  } else {
    
    echo "Pour calculer la suite de syracuse il faut avoir saisir initialement un chiffre positif et non nul !";
    echo "<br><a href='index.html'>Cliquez ici pour revenir au formulaire</a>";
  }