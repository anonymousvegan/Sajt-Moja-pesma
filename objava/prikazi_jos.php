<?php
session_start();
require "../backend/pozadinske/vezasabazom.php";
if(isset($_POST["profil"])){
$profil=$_POST["profil"];
}
else{
  if(isset($_POST["pretraga"])){
    $profil="pretraga_stranica_prikazi_rezultate";
  }
  else{$profil="index_stranica_prikazi_sve";
  }
}
if(isset($_SESSION["ime"])){
    if($_SESSION["ovlascenje"]=="admin"){
        $ispis="sve";
        $ovlascenje="admin";
    }
    else{
    settype($_SESSION["godine"], int);
    if  ($_SESSION["godine"]>=18){
        $ispis="sve";
        $ovlascenje="obican";
    }
    else {
        $ispis="filter";
        $ovlascenje="obican";
    }
}}
else{
    $ispis="filter";
    $ovlascenje="nelogovan";
}
$broj= $_POST["broj"];
if($profil=="index_stranica_prikazi_sve"){
  if ($ovlascenje=="admin"){
    $sql= "SELECT * FROM pesme ORDER BY vreme DESC LIMIT ".$broj.";";
  }
  else{
    if($ispis=="sve"){
      $sql= "SELECT * FROM pesme ORDER BY vreme DESC LIMIT  ".$broj.";";
    }
    else if($ispis=="filter"){
      $sql= "SELECT * FROM pesme WHERE pogodna='jeste' ORDER BY vreme DESC LIMIT ".$broj.";";
    }
}}
else if($profil=="pretraga_stranica_prikazi_rezultate"){
  $pretraga=$_POST["pretraga"];
  if ($ovlascenje=="admin"){
    $sql= "SELECT * FROM pesme WHERE  pesma like '%".$pretraga . "%' ORDER BY vreme DESC LIMIT ". $broj .";";
  }else{
    if($ispis=="sve"){
      $sql= "SELECT * FROM pesme WHERE  pesma like '%".$pretraga . "%' ORDER BY vreme DESC LIMIT". $broj .";";
    }
    else if($ispis=="filter"){
      $sql= "SELECT * FROM pesme WHERE pesma like '%".$pretraga . "%' AND pogodna='jeste' ORDER BY vreme DESC LIMIT ". $broj .";";
    }
  }
}
else{
  if ($ovlascenje=="admin"){
    $sql= "SELECT * FROM pesme WHERE pisac='".$profil . "' ORDER BY vreme DESC LIMIT ".$broj.";";
  }
  else{
    if($ispis=="sve"){
    $sql= "SELECT * FROM pesme WHERE pisac='". $profil . "' ORDER BY vreme DESC LIMIT ".$broj.";";
    }
    else if($ispis=="filter"){
      $sql= "SELECT * FROM pesme WHERE pogodna='jeste' AND pisac='". $profil . "'ORDER BY vreme DESC LIMIT ".$broj.";";
    } 
}}
require "ispis.php";
?>