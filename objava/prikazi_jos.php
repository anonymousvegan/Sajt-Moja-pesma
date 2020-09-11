<?php
session_start();
require "../backend/pozadinske/vezasabazom.php";
$profil="index_stranica_prikazi_sve";
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
}}else{
  if ($ovlascenje=="admin"){
    $sql= "SELECT * FROM pesme WHERE pisac='".$profil . "' ORDER BY vreme DESC LIMIT  ".$broj.";";
  }
  else{
    if($ispis=="sve"){
      $sql= "SELECT * FROM pesme WHERE pisac='". $profil . "' ORDER BY vreme DESC LIMIT  ".$broj.";";
    }
    else if($ispis=="filter"){
      $sql= "SELECT * FROM pesme WHERE pogodna='jeste' AND pisac='". $profil . "'ORDER BY vreme DESC LIMIT  ".$broj.";";
    } 
}}
$rezultat= mysqli_query($conn, $sql);
$brojrezulta=mysqli_num_rows($rezultat);
while($red=mysqli_fetch_assoc($rezultat)){
  require "vreme.php";
echo '<div class="card text-center kartica" id="'.$red["id"].'">';
echo '<div class="card-header pisac">';
echo '<a href="profil.php?profil='.$red["pisac"].'">'. $red["pisac"] . '</a>';
echo '</div><div class="card-body telo-kartice">';
echo '<div class="sadrzaj">';
echo '<h5 class="card-title naslov">'.$red["naslov"].'</h5>';
echo '<p class="card-text pesma">' .$red["pesma"].'</p></div>';
echo '<div class="komentari">neki-komentar</div>';
echo '<button onclick="prikazivise('.$red["id"].')" class="btn btn-primary prikazi-vise">Procitaj vise</a>';
echo '</div>
<div class="card-footer text-muted vreme">';
if($ovlascenje=="nelogovan"){
  echo '<div onclick="lajkujnelogovan()"  class="srce"><img src="fajlovi/heart-solid.svg">'. $red["lajkova"] .'</div><div class="vreme-tekst">' . $vreme .'</div>';
}
else{
echo '<div onclick="lajkuj('.$red["id"].","."'".$_SESSION["ime"]."')".'"'. ' class="srce"><img src="fajlovi/srce-puno.svg"><span id="' .$red["id"] . 'brojlajkova">' . $red["lajkova"] .'</div><div class="vreme-tekst">' . $vreme .'</div>';
}
echo '</div></div>';
}
echo "<button class='jos' onclick='prikazi_jos()'>+</button>";