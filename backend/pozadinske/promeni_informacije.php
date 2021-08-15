<?php
session_start();
require "vezasabazom.php";
if(isset($_SESSION["ime"])){
    if(isset($_POST["submitdugmeinfo"])){
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $korisnicko_ime=$_POST["korisnickoime"];
        $email = $_POST["email"];
        $godine = $_POST["godine"];
        $biografija = $_POST["biografija"];
            if(empty($korisnicko_ime) || empty($email) || empty($godine)) {
                header("location: ../../uredi-profil.php?greska=prazno-polje");
                exit();
            }
        if (isset($ime)){
            if (!preg_match("/^[a-zA-ZšđćčžŠĐĆČŽабвгдђежзијклљмнљопрстћуфхцчџшАБВГДЂЕЖЗИЈКЛЉМНЊОПРИСТЋУФХЦЧЏШ]*$/", $ime)){
                header("location: ../../uredi-profil.php?greska=neispravno-ime");
                exit();
            }
        }
        if (isset($prezime)){
            if (!preg_match("/^[a-zA-ZšđćčžŠĐĆČŽабвгдђежзијклљмнљопрстћуфхцчџшАБВГДЂЕЖЗИЈКЛЉМНЊОПРИСТЋУФХЦЧЏШ]*$/", $prezime)){
                header("location: ../../uredi-profil.php?greska=neispravo-prezime");
                exit();
            }
        }
        if (!preg_match("/^[a-zA-Z0-9šđćčžŠĐĆČŽабвгдђежзијклљмнљопрстћуфхцчџшАБВГДЂЕЖЗИЈКЛЉМНЊОПРИСТЋУФХЦЧЏШ]*$/", $korisnicko_ime)){
            header("location: ../../uredi-profil.php?greska=neispravo-korisnicko-ime");
            exit();
        }
        if(is_numeric($godine)){
            settype($godine, "int");
            if($godine<4 || $godine>120){
            header("location: ../../uredi-profil.php?greska=netacne-godine");
            exit();
            }
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location: ../../uredi-profil.php?greska=nesipravan-email");
            exit();
        }
        else{
            $sql= "SELECT * FROM korisnici WHERE id=?;";
            $stmt= mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location: ../../uredi-profil.php?greska=sqlgreksa1");
                exit();   
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $_SESSION["id"]);
                mysqli_stmt_execute($stmt);
                $rezultati=mysqli_stmt_get_result($stmt);
                if($red=mysqli_fetch_assoc($rezultati)){
                $staro_ime=$red["ime"];
                $stari_email=$red["email"];
                    if($red["ime"]==$korisnicko_ime && $red["email"]==$email){
                        $sql= "UPDATE korisnici set pravoime=?, prezime=?, godine=?, biografija=? WHERE id=?;";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("location: ../../uredi-profil.php?greska=sqlgreksa2");
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, "sssss", $ime, $prezime, $godine, $biografija, $_SESSION["id"]);
                            mysqli_stmt_execute($stmt);
                            header("location: ../../uredi-profil.php?uspeh=informacije-promenjene");
                        }  
                    }
                    #ako menja samo email
                    else if($staro_ime==$korisnicko_ime && $stari_email!=$email){
                        $sql= "SELECT * FROM korisnici WHERE email=?";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("location: ../../uredi-profil.php?greska=sqlgreksa4");
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, s, $email);
                            mysqli_stmt_execute($stmt);
                            $rezultati=mysqli_stmt_get_result($stmt);
                            $broj= mysqli_num_rows($rezultati);
                            if($broj>0){
                                header("location: ../../uredi-profil.php?greska=email_zauzet");
                                exit();
                            }
                            else{
                                $sql= "UPDATE korisnici set pravoime=?, prezime=?, godine=?, biografija=?, email=? WHERE id=?;";
                                $stmt=mysqli_stmt_init($conn);
                                if(!mysqli_stmt_prepare($stmt, $sql)){
                                    header("location: ../../uredi-profil.php?greska=sqlgreska5");
                                    exit();
                                }
                                else{
                                    mysqli_stmt_bind_param($stmt, "ssssss", $ime, $prezime, $godine, $biografija, $email, $_SESSION["id"]);
                                    mysqli_stmt_execute($stmt);
                                    header("location: ../../uredi-profil.php?uspeh=informacije-promenjene");
                                }
                            }
                        }
                    }
                    #ako menja samo ime
                    else if($staro_ime!=$korisnicko_ime && $stari_email==$email){
                        $sql= "SELECT * FROM korisnici WHERE ime=?";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("location: ../../uredi-profil.php?greska=sqlgreksa6");
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, s, $korisnicko_ime);
                            mysqli_stmt_execute($stmt);
                            $rezultati=mysqli_stmt_get_result($stmt);
                            $broj= mysqli_num_rows($rezultati);
                            if($broj>0){
                                header("location: ../../uredi-profil.php?greska=ime_zauzeto");
                                exit();
                            }
                            else{
                                $sql= "UPDATE korisnici set pravoime=?, prezime=?, godine=?, biografija=?, ime=? WHERE id=?;";
                                $stmt=mysqli_stmt_init($conn);
                                if(!mysqli_stmt_prepare($stmt, $sql)){
                                    header("location: ../../uredi-profil.php?greska=sqlgreska5");
                                    exit();
                                }
                                else{
                                    mysqli_stmt_bind_param($stmt, "ssssss", $ime, $prezime, $godine, $biografija, $korisnicko_ime, $_SESSION["id"]);
                                    mysqli_stmt_execute($stmt);
                                    $sql= "UPDATE pesme set pisac=?  WHERE pisac=?;";
                                    $stmt=mysqli_stmt_init($conn);
                                    if(!mysqli_stmt_prepare($stmt, $sql)){
                                        header("location: ../../uredi-profil.php?greska=sqlgreska10");
                                        exit();
                                    }
                                    else{
                                        mysqli_stmt_bind_param($stmt, "ss", $korisnicko_ime, $staro_ime );
                                        mysqli_stmt_execute($stmt);
                                        $_SESSION["ime"]=$korisnicko_ime;
                                        header("location: ../../uredi-profil.php?uspeh=informacije-promenjene");
                                    }
                                }
                            }
                        }
                    }
                    #u slučaju da se menjaju i email i  username
                    else if($staro_ime!=$korisnicko_ime && $stari_email!=$email){
                        $sql= "SELECT * FROM korisnici WHERE email=?";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("location: ../../uredi-profil.php?greska=sqlgreksa7");
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, s, $email);
                            mysqli_stmt_execute($stmt);
                            $rezultati=mysqli_stmt_get_result($stmt);
                            $broj= mysqli_num_rows($rezultati);
                            if($broj>0){
                                header("location: ../../uredi-profil.php?greska=email_zauzet");
                                exit();
                            }
                            else{
                                $sql= "SELECT * FROM korisnici WHERE ime=?";
                                $stmt=mysqli_stmt_init($conn);
                                if(!mysqli_stmt_prepare($stmt, $sql)){
                                    header("location: ../../uredi-profil.php?greska=sqlgreksa8");
                                    exit();
                                }
                                else{
                                    mysqli_stmt_bind_param($stmt, s, $korisnicko_ime);
                                    mysqli_stmt_execute($stmt);
                                    $rezultati=mysqli_stmt_get_result($stmt);
                                    $broj= mysqli_num_rows($rezultati);
                                    if($broj>0){
                                        header("location: ../../uredi-profil.php?greska=ime_zauzeto");
                                        exit();
                                    }
                                    else{
                                        $sql= "UPDATE korisnici set pravoime=?, prezime=?, godine=?, biografija=?, ime=?, email=? WHERE id=?;";
                                        $stmt=mysqli_stmt_init($conn);
                                        if(!mysqli_stmt_prepare($stmt, $sql)){
                                            header("location: ../../uredi-profil.php?greska=sqlgreska9");
                                            exit();
                                        }
                                        else{
                                            mysqli_stmt_bind_param($stmt, "sssssss", $ime, $prezime, $godine, $biografija, $korisnicko_ime, $email, $_SESSION["id"]);
                                            mysqli_stmt_execute($stmt);
                                            $sql= "UPDATE pesme set pisac=?  WHERE pisac=?;";
                                            $stmt=mysqli_stmt_init($conn);
                                            if(!mysqli_stmt_prepare($stmt, $sql)){
                                                header("location: ../../uredi-profil.php?greska=sqlgreska11");
                                                exit();
                                            }
                                            else{
                                                mysqli_stmt_bind_param($stmt, "ss", $korisnicko_ime, $staro_ime );
                                                mysqli_stmt_execute($stmt);
                                                $_SESSION["ime"]=$korisnicko_ime;
                                                header("location: ../../uredi-profil.php?uspeh=informacije-promenjene");
                                            }
                                        }
                                    }
                                }
                            }       
                        }
                    }
                }
                else{
                    header("location: ../../uredi-profil.php?greska=sqlgreksa3");
                }
            }
        }
    }
    else{
        header("location: index.php?greska=nema-pristup");
    }
}
else{
    header("location: ../../index.php?greska=promenineulogovan");
}