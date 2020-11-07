<?php
    require "backend/pozadinske/vezasabazom.php"; 
    if(isset($_SESSION["id"])){
        require "backend/pozadinske/vezasabazom.php";
        $sql = "SELECT * FROM korisnici WHERE id=".$_SESSION["id"];
        $rezultat= mysqli_query($conn, $sql);
        $brojrezulta=mysqli_num_rows($rezultat);
        while($red=mysqli_fetch_assoc($rezultat)){
            $id=$red["id"];
            $korisnicko_ime=$red["ime"];
            $ime=$red["pravoime"];
            $prezime=$red["prezime"];
            $godine=$red["godine"];
            $email=$red["email"];
            $biografija=$red["biografija"];
        }
    }
?>
<div id="naslov">
    <a href="uredi-profil.php?tab=korisnickeInformacije"><div id="korisnickeinformacije" class="aktivantab">Korisničke informacije</div></a>
    <a href="uredi-profil.php?tab=sigurnost"><div id="sigurnost">Sigurnost</div></a>
</div>
<form method="post"  action="backend/pozadinske/promeni_informacije.php"> 
<div id="prvagrupa">
    <div id="ime">
        <div class="naslovpolja">Ime</div>
        <div class="form-group">
            <input type="text" placeholder=" " value="<?php echo $ime ?>"  class="form-control" name="ime" id="imeunos" aria-describedby="emailHelp" autocomplete="off" >
            <label for="imeunos" id="limeunos">
                <span class="label-tekst" id="ime-label-tekst">Unesite ime</span>
            </label>
        </div>
    </div>
    <div id="prezime">
        <div class="naslovpolja">Prezime</div>
        <div class="form-group">
            <input type="text" placeholder=" " value="<?php echo $prezime ?>" class="form-control" name="prezime" id="prezimeunos" aria-describedby="emailHelp" autocomplete="off" >
            <label for="prezimeunos" id="lprezimeunos">
                <span class="label-tekst" id="prezime-label-tekst">Unesite prezime...</span>
            </label>
        </div>
    </div>
    <div id="korisnickoime">
        <div class="naslovpolja">Korisničko ime</div>
        <div class="form-group">
            <input type="text" placeholder=" " value="<?php echo $korisnicko_ime ?>" class="form-control" name="korisnickoime" id="korisnickoimeunos" aria-describedby="emailHelp" autocomplete="off" required>
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
            <input type="email" placeholder=" " value="<?php echo $email ?>" class="form-control" name="email" id="emailunos" aria-describedby="emailHelp" autocomplete="off" required >
            <label for="emailunos" id="lemailunos">
                <span class="label-tekst" id="email-label-tekst">Unesite email...</span>
            </label>
        </div>
    </div>
    <div id="godine">
        <div class="naslovpolja">Godine</div>
        <div class="form-group">
            <input type="number" value="<?php echo $godine ?>" min="4" max="120" placeholder=" " class="form-control" name="godine" id="godineunos" aria-describedby="emailHelp" autocomplete="off" required >
            <label for="godineunos" id="lgodineunos">
                <span class="label-tekst" id="godine-label-tekst">Koliko imate godina...</span>
            </label>
        </div>
    </div>
</div>
<div id="trecagrupa">
    <div id="biografija">
        <div class="naslovpolja">Biografija</div>
        <textarea placeholder="Unesite biografiju" maxlenght="500" id="biografijaunos" name="biografija"><?php echo $biografija ?></textarea>
    </div>
</div>
<div id="cetvrtagrupa">
    <button type="submit" class="btn btn-primary" id="submitzapodatke" name="submitdugmeinfo">Sačuvaj</button>
    <button type="button" onclick="otkazivanje()" class="btn btn-danger" id="otkazizapodatke">Otkaži</button>
</div>
</form>