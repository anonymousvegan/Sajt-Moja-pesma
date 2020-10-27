
<div id="okvir-za-uredjivanje">
    <div id="za_profilnu">
        <div id="profilna">
            <img id="slika" src="<?php
            if(isset($_SESSION["id"])){
                require "backend/pozadinske/vezasabazom.php";
                $sql = "SELECT * FROM korisnici WHERE id=".$_SESSION["id"];
                $rezultat= mysqli_query($conn, $sql);
                $brojrezulta=mysqli_num_rows($rezultat);
                while($red=mysqli_fetch_assoc($rezultat)){
                    $tip= gettype($red["profilna"]);
                    if($tip=="null" || $tip=="NULL" || $tip==null || $red["profilna"]==""){
                        echo "fajlovi/profilna.png";
                    }
                    else if($tip=="string"){
                        echo  $red["profilna"];
                    }
                }
            }
            else{
                echo "fajlovi/profilna.png";
            }
            ?>" alt="profilna slika">
        </div>
        <form id="forma_za_sliku" action="ubaci_sliku.php" method="post" enctype="multipart/form-data">
            <input onchange="ubaci(event)" type="file" name="slika" id="fajl">
            <label id="lfajl" class="btn btn-primary" for="fajl">Promenite sliku</label><br>
            <div id="grupadugmadi">
            <button type="submit" class="btn btn-primary" id="submitdugme" name="submitdugme">Sačuvaj</button>
            <button type="button" onclick="otkazivanje()" class="btn btn-danger" id="otkazi">Otkaži</button>
            </div>
        </form>
        </div>
        <div id="podatci">
            <div id="naslov">
                <div id="korisnickeinformacije">Korisničke informacije</div>
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
                            <span class="label-tekst" id="prezime-label-tekst">Unesite ime</span>
                        </label>
                    </div>
                </div>
                <div id="korisnickoime">
                    <div class="naslovpolja">Korisničko ime</div>
                    <div class="form-group">
                        <input type="text" placeholder=" " class="form-control" name="Korisnickoime" id="korisnickoimeunos" aria-describedby="emailHelp" autocomplete="off" >
                        <label for="korisnickoimeunos" id="lkorisnickoimeunos">
                            <span class="label-tekst" id="korisnickoime-label-tekst">Unesite ime</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>