<div id="unos">
<span class="x" onclick="zatvori()">X</span>
<div class="card text-center kartica" >
<div class="card-header pisac">
<a href="profil.php?profil=anonymousvegan">
anonymousvegan</a>
</div><div class="card-body telo-kartice">
<div class="sadrzaj">
<form onsubmit="return proveriUnos()" class="form-container" autocomplete="off" method="post" action="backend/pozadinske/unospesme.php">
<input type="hidden" name="pisac" value="<?php echo $_SESSION['ime'];?>">
<div class="form-group">
                <input onkeyup="proveri('n')" type="text"  placeholder=" " class="form-control" name="naslov" id="naslov" aria-describedby="emailHelp" autocomplete="off" required >
                <label for="naslov" id="lnaslov">
                <span class="label-tekst" id="username-label-tekst">Naslov...</span></label>
            </div>
            <div class="okvir-za-unos-pesme">
                <textarea require minlength="30" onkeyup="proveri('p')" id="unospesme" name="pesma" placeholder="Tekst pesme"></textarea>
            </div>
            <div class="form-group">
            <select class="btn btn-primary" name="kategorija" id="kategorija">
                <option value="neodredjeno">Odaberite Kategodiju</option>
                <option value="ljubavne">Ljubavne</option>
                <option value="decije">Dečije</option>
                <option value="porodicne">Porodične</option>
                <option value="zivotinje-i-priroda">Životinje i priroda</option>
                <option value="rodoljubive-i-religijske">Rodoljubive/Religijske</option>
                <option value="ostale">Ostale</option>
            </select>
            </div>
        </div>
    </div>
<div class="card-footer text-muted vreme">
<div onclick="promeni_boju()" class="boja"><img src="fajlovi/boja.png"></div>
<div class="vreme-tekst">
<button type="submit" name="unosdugme" class="btn btn-primary">Objavite</button>
</form>
</div> <div class="ikonicazakomentarkontejner"><img class="ikonicazakomentar" src="fajlovi/komentar.svg"> </div></div></div>
</div>