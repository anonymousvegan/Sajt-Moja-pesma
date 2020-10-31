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
            if (!preg_match("/^[a-zA-Z0-9šđćčžŠĐĆČŽабвгдђежзијклљмнљопрстћуфхцчџшАБВГДЂЕЖЗИЈКЛЉМНЊОПРИСТЋУФХЦЧЏШ]*$/", $ime)){
                header("location: ../../uredi-profil.php?greska=neispravno-ime");
                exit();
            }
        }
        if (isset($ime)){
            if (!preg_match("/^[a-zA-Z0-9šđćčžŠĐĆČŽабвгдђежзијклљмнљопрстћуфхцчџшАБВГДЂЕЖЗИЈКЛЉМНЊОПРИСТЋУФХЦЧЏШ]*$/", $prezime)){
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
        if(!filter_var("some@address.com", FILTER_VALIDATE_EMAIL)){
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
                    else{
                        $sql = "SELECT  ime FROM korisnici where ime=?;";
                        $stmt= mysqli_stmt_init($conn); 
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("location: ../../uredi-profil.php?greska=sqlgreksa4");
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, "s", $korisnicko_ime);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                            $proverarezultata=mysqli_stmt_num_rows($stmt);
                            if($proverarezultata>0){
                                header("location: ../../uredi-profil.php?greska=ime_zauzeto");
                                exit();  
                            }
                            else{
                                $sql = "SELECT  email FROM korisnici where email=?;"; 
                                $stmt= mysqli_stmt_init($conn); 
                                if(!mysqli_stmt_prepare($stmt, $sql)){
                                    header("location: ../../uredi-profil.php?greska=sqlgreksa5");
                                    exit();
                                }
                                else{
                                    mysqli_stmt_bind_param($stmt, "s", $email);
                                    mysqli_stmt_execute($stmt);
                                    mysqli_stmt_store_result($stmt);
                                    $proverarezultata=mysqli_stmt_num_rows($stmt);
                                    if($proverarezultata>0){
                                        header("location: ../../uredi-profil.php?greska=email_zauzet");
                                        exit();  
                                    }
                                    else{
                                        $sql= "UPDATE korisnici set ime=?, email=?,  pravoime=?, prezime=?, godine=?, biografija=? WHERE id=?;";
                                        $stmt=mysqli_stmt_init($conn);
                                        if(!mysqli_stmt_prepare($stmt, $sql)){
                                            header("location: ../../uredi-profil.php?greska=sqlgreksa2");
                                            exit();
                                        }
                                        else{
                                            mysqli_stmt_bind_param($stmt, "sssssss", $korisnicko_ime, $email, $ime, $prezime, $godine, $biografija, $_SESSION["id"]);
                                            mysqli_stmt_execute($stmt);
                                            header("location: ../../uredi-profil.php?uspeh=informacije-promenjene");
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