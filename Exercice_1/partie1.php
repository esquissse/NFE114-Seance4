<?php

  // On fixe en dure n = 15
  $n = 15;
  $compteur = 0;

  while ($n !=1) {
    if ( $n % 2 == 0) {
      $n /= 2;
      echo $n." ";
    } else {
      $n = 3*$n + 1;
      echo $n." ";
    }
    $compteur++;
  }
  echo "<br/>Il y a fallut ". $compteur . " saut(s) pour terminer la suite de Collatz";