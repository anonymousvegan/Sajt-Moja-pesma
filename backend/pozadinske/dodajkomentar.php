<?php
session_start();
if(isset($_SESSION["ime"])){
    require "vezasabazom.php";
    $id = $_POST["pesma"];
    $autor= $_POST["autor"];
    $komentar = $_POST["komentar"];
    $ime= $_SESSION["ime"];
    $vreme=date("U");
    if($autor==$ime&&$komentar!=null){
        $sql = "SELECT * FROM pesme WHERE id=". $id;
        $rezultat= mysqli_query($conn, $sql);
        $red=mysqli_fetch_assoc($rezultat);
        $trenutni_komentari=$red["komentari"];
        if($trenutni_komentari==null){
            echo "trenutno ima 0 komentara";
            $zaunos = new stdClass();
            $zaunos->autor=$autor;
            $zaunos->komentar=$komentar;
            $zaunos->vreme=$vreme;
            $jsonunos=json_encode($zaunos);
            $sql = "UPDATE pesme set komentari=? WHERE id=?";
            $stmt = mysqli_stmt_init($conn); 
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "greška u komentarisanju 1";
                exit();
            }else{
                mysqli_stmt_bind_param($stmt, "ss", $jsonunos, $id);
                mysqli_stmt_execute($stmt);
                echo "prokomentarisano";
            } 
        }else{
            echo "ima više od 0 komentara";
            $stari=json_decode($trenutni_komentari);
            $type = gettype($stari);
            echo "type od starih je ".$type;
            if ($type=="object"){
                echo "radim deo koda za type=object";
                $novi = new stdClass();
                $novi->autor=$autor;
                $novi->komentar=$komentar;
                $novi->vreme=$vreme;
                $zaunos=array($stari, $novi);
                $jsonunos=json_encode($zaunos);
                $sql = "UPDATE pesme set komentari=? WHERE id=?";
                $stmt = mysqli_stmt_init($conn); 
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "greška u komentarisanju 2";
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt, "ss", $jsonunos, $id);
                    mysqli_stmt_execute($stmt);
                    echo "prokomentarisano";
                } 
            }else if($type=="array"){
                $novi = new stdClass();
                $novi->autor=$autor;
                $novi->komentar=$komentar;
                $novi->vreme=$vreme;
                array_push($stari, $novi);
                $jsonunos=json_encode($stari);
                $sql = "UPDATE pesme set komentari=? WHERE id=?";
                $stmt = mysqli_stmt_init($conn); 
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "greška u komentarisanju 3";
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt, "ss", $jsonunos, $id);
                    mysqli_stmt_execute($stmt);
                    echo "prokomentarisano";
                }
            }
        }
    }
}
else{
     echo "ulogujte se";
}