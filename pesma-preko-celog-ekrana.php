<div class="pesma-preko-celog-ekrana">
    <div class="okvir-za-pesmu">
        <div class="pisac">
            <a href="profil.php?profil=anonymousvegan" id="pisac-preko-celog-ekrana">anonymousvegan</a>
        </div>
        <h1 id="naslov-preko-celog-ekrana">Krvava bajka</h1>
        <p id="tekst-pesme-preko-celog-ekrana"></p>
    </div>
    <div id="okvirzakomentare" class="okvir-za-komentare">
        <div id="okvir-za-vreme-preko-celog-ekrana">
            <div id="lajkuj-preko-celog-ekrana"  class="srce"><img src="fajlovi/srce-puno.png"><span id="brojlajkovaceoekran"></span></div>
            <div id="vreme-preko-celog-ekrana"></div>
            <div class="x" onclick="zatvori_pesmu_preko_celog_ekrana()">&times;</div>
        </div>
        <input id="autorkomentara" type="hidden" name="autor" value="<?php echo $_SESSION['ime']?>">
        <input id="id-pesme-za-komentarisanje" type="hidden" name="idpesme">
        <div id="komentari">
        <?php  require "ispiskomentara.php";?>
        </div>
        <div class="form-group">
        <input type="text" name="komentar" id="unoskomentara" placeholder=" " autocomplete="off" require/>
        <label for="unoskomentara" id="lkomentar">
            <span class="label-tekst" id="komentar-label-tekst">Unesi komentar...</span>
        </label>
        </div>
    </div>
</div>