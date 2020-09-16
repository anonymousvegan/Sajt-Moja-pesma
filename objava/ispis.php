<?php
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
  echo '<div onclick="lajkujnelogovan()"  class="srce"><img src="fajlovi/srce-prazno.svg">'. $red["lajkova"] .'</div><div class="vreme-tekst">' . $vreme .'</div>';
}
else{
  $lajkovao=$red["lajkovao"];
  $niz=json_decode($lajkovao);
  if(in_array($_SESSION["ime"], $niz)){
    echo '<div onclick="lajkuj('.$red["id"].","."'".$_SESSION["ime"]."')".'"'. ' class="srce"><img src="fajlovi/srce-puno.png"><span id="' .$red["id"] . 'brojlajkova">' . $red["lajkova"] .'</div><div class="vreme-tekst">' . $vreme .'</div>';
  }
  else{
    echo '<div onclick="lajkuj('.$red["id"].","."'".$_SESSION["ime"]."')".'"'. ' class="srce"><img src="fajlovi/srce-prazno.svg"><span id="' .$red["id"] . 'brojlajkova">' . $red["lajkova"] .'</div><div class="vreme-tekst">' . $vreme .'</div>';
  }
}
echo '</div></div>';
}