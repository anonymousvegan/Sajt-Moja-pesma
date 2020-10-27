
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
                    if($tip=="null" || $tip=="NULL" || $tip==null){
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
            <div id="ime">
                <div><label for=""></label></div>
                <div><label for=""></label></div>
                <div><label for=""></label></div>
            </div>
        </div>
</div>