<?php
if($profil=="index_stranica_prikazi_sve"){
  if ($ovlascenje=="admin"){
    $sql= "SELECT * FROM pesme ORDER BY vreme DESC LIMIT 5;";
  }
  else{
    if($ispis=="sve"){
      $sql= "SELECT * FROM pesme ORDER BY vreme DESC LIMIT 5;";
    }
    else if($ispis=="filter"){
      $sql= "SELECT * FROM pesme WHERE pogodna='jeste' ORDER BY vreme DESC LIMIT 5; ";
    }
}}
else if($profil=="pretraga_stranica_prikazi_rezultate"){
  if ($ovlascenje=="admin"){
    $sql= "SELECT * FROM pesme WHERE  pesma like '%".$pretraga . "%' ORDER BY vreme DESC LIMIT 5;";
  }else{
    if($ispis=="sve"){
      $sql= "SELECT * FROM pesme WHERE  pesma like '%".$pretraga . "%' ORDER BY vreme DESC LIMIT 5;";
    }
    else if($ispis=="filter"){
      $sql= "SELECT * FROM pesme WHERE pesma like '%".$pretraga . "%' AND pogodna='jeste' ORDER BY vreme DESC LIMIT 5;";
    }
  }
}
else{
  if ($ovlascenje=="admin"){
    $sql= "SELECT * FROM pesme WHERE pisac='".$profil . "' ORDER BY vreme DESC LIMIT 5;";
  }
  else{
    if($ispis=="sve"){
    $sql= "SELECT * FROM pesme WHERE pisac='". $profil . "' ORDER BY vreme DESC LIMIT 5;";
    }
    else if($ispis=="filter"){
      $sql= "SELECT * FROM pesme WHERE pogodna='jeste' AND pisac='". $profil . "'ORDER BY vreme DESC LIMIT 5;";
    } 
}}
require "ispis.php";
?>