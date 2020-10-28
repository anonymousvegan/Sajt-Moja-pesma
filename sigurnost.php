<div id="naslov">
    <div id="korisnickeinformacije">Korisničke informacije</div>
    <div id="sigurnost" class="aktivantab">Sigurnost</div>
</div>
<div id="naslov-grupe">Promenite lozinku</div>
<div id="prvagrupa">
    <div id="ime">
        <div class="naslovpolja">Treutna lozinka</div>
        <div class="form-group">
            <input type="password" placeholder=" "  class="form-control" name="trenutna" id="trenutnaunos" aria-describedby="emailHelp" autocomplete="off" >
            <label for="trenutnaunos" id="ltrenutnaunos">
                <span class="label-tekst" id="trenutna-label-tekst">Trenutna lozinka...</span>
            </label>
        </div>
    </div>
    <div id="prezime">
        <div class="naslovpolja">Nova lozinka</div>
        <div class="form-group">
            <input type="password" placeholder=" "  class="form-control" name="lozinka" id="lozinkaunos" aria-describedby="emailHelp" autocomplete="off" >
            <label for="lozinkaunos" id="llozinkaunos">
                <span class="label-tekst" id="lozinka-label-tekst">Nova lozinka...</span>
            </label>
        </div>
    </div>
    <div id="korisnickoime">
        <div class="naslovpolja">Ponovo unesite lozinku</div>
        <div class="form-group">
            <input type="text" placeholder=" " class="form-control" name="ponovolozinka" id="ponovolozinkaunos" aria-describedby="emailHelp" autocomplete="off" require>
            <label for="ponovolozinkaunos" id="ponovolozinkaunos">
                <span class="label-tekst" id="ponovo-lozinka-label-tekst">Nova lozinka...</span>
            </label>
        </div>
    </div>
</div>
<div id="cetvrtagrupa">
    <button type="submit" class="btn btn-primary" id="submitzapodatke" name="submitdugme">Sačuvaj</button>
    <button type="button" onclick="otkazivanje()" class="btn btn-danger" id="otkazizapodatke">Otkaži</button>
</div>