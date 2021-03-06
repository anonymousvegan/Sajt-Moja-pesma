<?php
session_start();
if($_SESSION["id"]){
    require "backend/pozadinske/vezasabazom.php";
    $id= $_SESSION["id"];
    $slika = $_FILES["slika"];
    $imeslike=$_FILES["slika"]["name"];
    $imesliketmp=$_FILES["slika"]["tmp_name"];
    $velicinaslike=$_FILES["slika"]["size"];
    $greska=$_FILES["slika"]["error"];
    $vrstaslike=$_FILES["slika"]["type"];
    $ekstenzija= explode(".", $imeslike);
    $pravaekstenzija= strtolower(end($ekstenzija));
    $dozvoljenje_ekstenzije= array("jpg", "jpeg", "png", "gif");
    if(in_array($pravaekstenzija, $dozvoljenje_ekstenzije)){
        if($greska===0){
            if ($velicinaslike<5000000){
                $novoime= uniqid("", true).".".$pravaekstenzija;
                $lokacija="ubaceneslike/".$novoime;
                $sql = "SELECT * FROM korisnici WHERE id=".$_SESSION["id"];
                $rezultat= mysqli_query($conn, $sql);
                $brojrezulta=mysqli_num_rows($rezultat);
                while($red=mysqli_fetch_assoc($rezultat)){
                    $tip= gettype($red["profilna"]);
                    if($tip=="null" || $tip=="NULL" || $tip==null){
                        move_uploaded_file($imesliketmp, $lokacija);
                        $sql = "UPDATE korisnici set profilna=? WHERE id=?";
                        $stmt= mysqli_stmt_init($conn); 
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            echo "greška u ubacivanju slike. kod greške:1";
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, "ss", $lokacija, $id);
                            mysqli_stmt_execute($stmt);
                        }
                        header("location: uredi-profil.php?uspeh=slikapromenjena");
                    }
                    else if($tip=="string"){
                        unlink($red["profilna"]);
                        move_uploaded_file($imesliketmp, $lokacija);
                        $sql = "UPDATE korisnici set profilna=? WHERE id=?";
                        $stmt= mysqli_stmt_init($conn); 
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            echo "greška u ubacivanju slike. kod greške:1";
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, "ss", $lokacija, $id);
                            mysqli_stmt_execute($stmt);
                        }
                        header("location: uredi-profil.php?uspeh=slikapromenjena");
                    }
                }

            }else{
                echo "Slika koju ste uneli je prevelika, maksimalno možete uneti sliku veličine 5mb";
            }
        }
        else{
            echo "Došlo je do greške u toku ubacivanja vašeg fajla";
        }
    }
    else{
        echo "Nemožete  ubaciti fajl ovog tipa, dozvoljeni tipovi datoteka su: <br>
        jpg slika <br>
        jpeg slika <br>
        gif slika/animacija <br>
        png slika"; 
    }
}
else{
    echo "došlo je do greške- kod greške :3 probajte da se opet prijavite i pokušajte ponovo.";
}