<?php
if(isset($_POST["login"])){
    require "vezasabazom.php";
    $korisnicko_ime=$_POST["username"];
    $sifra=$_POST["password"];
    if(empty($korisnicko_ime) || empty($sifra)){
        header("location: ../../forme/prijava.php?greska=prazno_polje");
        exit();      
    }
    else{
        $sql= "SELECT * FROM korisnici WHERE ime=? OR email=?;";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../../forme/prijava.php?greska=sql_greska");
            exit();   
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $korisnicko_ime, $korisnicko_ime);
            mysqli_stmt_execute($stmt);
            $rezultati=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($rezultati)){
                $tacnasifra= password_verify($sifra, $row["sifra"]);
                if($tacnasifra==false){
                    header("location: ../../forme/prijava.php?greska=netacna_lozinka");
                    exit();  
                }
                else if($tacnasifra==true){
                    if(isset($_POST["sacuvaj"])){
                        $token= uniqid("", true).random_bytes(32);
                        $hash_token=password_hash($token, PASSWORD_DEFAULT);
                        setcookie("login_token", $token, time()+2592000);
                        $sql="UPDATE korisnici SET token = ? WHERE ime= ? ;";
                        $stmt= mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("location: ../../forme/prijava.php?greska=sql_greska");
                            exit();   
                        }
                        else {
                            mysqli_stmt_bind_param($stmt, "ss", $hash_token, $korisnicko_ime);
                            mysqli_stmt_execute($stmt);
                        }
                    }
                    session_start();
                    $_SESSION["id"]=$row["id"];
                    $_SESSION["ime"]=$row["ime"];
                    $_SESSION["godine"]=$row["godine"];
                    $_SESSION["ovlascenje"]=$row["ovlascenje"];
                    header("location: ../../index.php?uspeh=prijavauspela");
                    exit();
                }
                else{
                    header("location: ../../forme/prijava.php?greska=nepoznata");
                    exit();   
                }
            }
            else{
                header("location: ../../forme/prijava.php?greska=nema_korisnika");
                exit();   
            }
        }
    }

}
else{
    header("location: ../../forme/prijava.php");
    exit();
}