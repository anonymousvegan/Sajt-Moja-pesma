<div id="naslov">
    <div id="korisnickeinformacije" class="aktivantab">Korisničke informacije</div>
    <div id="sigurnost">Sigurnost</div>
</div>
<div id="prvagrupa">
    <div id="ime">
        <div class="naslovpolja">Ime</div>
        <div class="form-group">
            <input type="text" placeholder=" "  class="form-control" name="ime" id="imeunos" aria-describedby="emailHelp" autocomplete="off" >
            <label for="imeunos" id="limeunos">
                <span class="label-tekst" id="ime-label-tekst">Unesite ime</span>
            </label>
        </div>
    </div>
    <div id="prezime">
        <div class="naslovpolja">Prezime</div>
        <div class="form-group">
            <input type="text" placeholder=" "  class="form-control" name="prezime" id="prezimeunos" aria-describedby="emailHelp" autocomplete="off" >
            <label for="prezimeunos" id="lprezimeunos">
                <span class="label-tekst" id="prezime-label-tekst">Unesite prezime...</span>
            </label>
        </div>
    </div>
    <div id="korisnickoime">
        <div class="naslovpolja">Korisničko ime</div>
        <div class="form-group">
            <input type="text" placeholder=" " class="form-control" name="Korisnickoime" id="korisnickoimeunos" aria-describedby="emailHelp" autocomplete="off" require>
            <label for="korisnickoimeunos" id="lkorisnickoimeunos">
                <span class="label-tekst" id="korisnickoime-label-tekst">Unesite korisničko ime...</span>
            </label>
        </div>
    </div>
</div>
<div id="drugagrupa">
    <div id="email">
        <div class="naslovpolja">Email</div>
        <div class="form-group">
            <input type="email" placeholder=" " class="form-control" name="Email" id="emailunos" aria-describedby="emailHelp" autocomplete="off" require >
            <label for="emailunos" id="lemailunos">
                <span class="label-tekst" id="email-label-tekst">Unesite email...</span>
            </label>
        </div>
    </div>
</div>
<div id="trecagrupa">
    <div id="biografija">
        <div class="naslovpolja">Biografija</div>
        <textarea maxlenght="500" id="biografijaunos" name="biografija"></textarea>
    </div>
</div>
<div id="cetvrtagrupa">
    <button type="submit" class="btn btn-primary" id="submitzapodatke" name="submitdugme">Sačuvaj</button>
    <button type="button" onclick="otkazivanje()" class="btn btn-danger" id="otkazizapodatke">Otkaži</button>
</div>