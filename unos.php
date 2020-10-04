<div id="unos">
<form onsubmit="return proveriUnos()" class="form-container" autocomplete="off" method="post" action="backend/pozadinske/unospesme.php">
    <span class="x" onclick="zatvori()">&times;</span>
    <div class="card text-center kartica">
    <div class="card-header pisac">
    <div class="pogodnost">
                <div class="pogodnost-tekst">Ova pesma je pogodna za sve?</div>
                <div class="pogodnost-odabir">
                    <select class="btn btn-primary" name="pogodna" id="pogodna">
                        <option value="jeste">Da</option>
                        <option value="nije">Ne</option>
                    </select>
                </div></div>
</div><div class="card-body telo-kartice">
<div class="sadrzaj">
<input type="hidden" name="pisac" value="<?php echo $_SESSION['ime'];?>">
<div class="form-group">
                <input onkeyup="proveri()" type="text"  placeholder=" " class="form-control" name="naslov" id="naslov" aria-describedby="emailHelp" autocomplete="off" required >
                <label for="naslov" id="lnaslov">
                <span class="label-tekst" id="username-label-tekst">Naslov</span></label>
            </div>
            <div class="okvir-za-unos-pesme">
                <textarea require minlength="30" onkeyup="proveri()" id="unospesme" name="pesma" placeholder="Tekst pesme"></textarea>
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
<div onclick="promeni_boju()" class="boja"><div class="boje">
    <div id="bela" class="aktivna bojaizbor"></div>
    <div id="crvena" class="bojaizbor"></div>
    <div id="narandzasta" class="bojaizbor"></div>
    <div id="zuta" class="bojaizbor"></div>
    <div id="zelena" class="bojaizbor"></div>
    <div id="plavozelena" class="bojaizbor"></div>
    <div id="svetloplava" class="bojaizbor"></div>
    <div id="tamnoplava" class="bojaizbor"></div>
    <div id="ljubicasta"class="bojaizbor"></div>
    <div id="roze" class="bojaizbor"></div>
    <div id="braon" class="bojaizbor"></div>
    <div id="dark"class="bojaizbor"></div>
</div><img src="fajlovi/boja.svg"></div>
<div class="vreme-tekst">
<button type="submit" name="unosdugme" class="btn btn-primary">Objavite</button>
</div> <div class="ikonicazakomentarkontejner"><img class="ikonicazakomentar" src="fajlovi/komentar.svg"> </div></div></div>
</form>
</div>