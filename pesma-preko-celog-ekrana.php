<div class="pesma-preko-celog-ekrana">
    <div class="okvir-za-pesmu">
    <div class="pisac"><a href="profil.php?profil=anonymousvegan" id="pisac-preko-celog-ekrana">anonymousvegan</a></div>
    <h1 id="naslov-preko-celog-ekrana">Krvava bajka</h1>
    <p id="tekst-pesme-preko-celog-ekrana"></p>
    </div>
    <div class="okvir-za-komentare">
    <form method="post" action="backend/pozadinske/dodajkomentar.php">
    <input type="hidden" name="autor" value="<?php echo $_SESSION['ime']?>">
    <input id="id-pesme-za-komentarisanje" type="hidden" name="idpesme">
    <input  value="help pls" id="unos-komentara" type="text" name="komentar">
    <button type="submit">unesikomet</button>
    </div>
    <div class="x" onclick="zatvori_pesmu_preko_celog_ekrana()">&times;</div>
</div>