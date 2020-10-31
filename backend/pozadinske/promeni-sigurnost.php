<?php
    session_start();
    require "vezasabazom.php";
    if(isset($_SESSION["id"])){
        if(isset($_POST["submitdugmesigurnost"])){
            $id= $_SESSION["id"];
            $trenutna=$_POST["trenutna"];
            $nova=$_POST["lozinka"];
            $ponovo=$_POST["ponovolozinka"];
            if(empty($trenutna)||empty($nova)||empty($ponovo)){
                header("location: ../../uredi-profil.php?tab=sigurnost&greska=prazno-polje");
                exit();
            }
            if($nova==$ponovo){
                $sql= "SELECT * FROM korisnici WHERE id=?";
                $stmt= mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: ../../uredi-profil.php?tab=sigurnost&greska=greska-u-bazi1");
                    exit();   
                }
                else {
                    mysqli_stmt_bind_param($stmt, "s", $id);
                    mysqli_stmt_execute($stmt);
                    $rezultati=mysqli_stmt_get_result($stmt);
                    if($red=mysqli_fetch_assoc($rezultati)){
                        $tacnasifra=password_verify($trenutna, $red["sifra"]);
                        if ($tacnasifra){
                            $sql = "UPDATE korisnici SET sifra=? WHERE id=?";
                            $stmt= mysqli_stmt_init($conn); 
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                                header("location: ../../uredi-profil.php?tab=sigurnost&greska=greska-u-bazi3");
                                exit();
                            }   
                            else{
                                $enkriptovanasifra=password_hash($nova, PASSWORD_DEFAULT);
                                mysqli_stmt_bind_param($stmt, "ss", $enkriptovanasifra, $id);
                                mysqli_stmt_execute($stmt);
                                header("location: ../../uredi-profil.php?tab=sigurnost&uspeh=promenjena-sifra");
                            }
                        }
                        else{
                            header("location: ../../uredi-profil.php?tab=sigurnost&greska=netacna-sifra");
                        }
                    }
                    else{
                        header("location: ../../uredi-profil.php?tab=sigurnost&greska=greska-sa-bazom2");
                    }
                }
            }
            else{
               header("location: ../../uredi-profil.php?tab=sigurnost&greska=lozinke-se-ne-poklapaju");
            }
        }
        else{
            header("location: index.php?greska=nema-pristup");
        }
    }
    else{
        header("location: ../../uredi-profil.php?greska=promeni-neulogovan");
    }

?>