<?php
session_start();
$id = $_POST["idpesme"];
require "pozadinske/vezasabazom.php";
if(isset($_SESSION["id"])){
    $idkorisnika=$_SESSION["id"];
    $sql = "SELECT * FROM korisnici where id=". $idkorisnika;
    $rezultat= mysqli_query($conn, $sql);
    $brojrezulta=mysqli_num_rows($rezultat);
    while($red=mysqli_fetch_assoc($rezultat)){
        $korisnickoime = $red["ime"];
        if($red["ovlascenje"]=="admin"){
            $sql = "DELETE FROM pesme WHERE id=?;";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "greška u brisanju iz baze";
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $id);
                mysqli_stmt_execute($stmt);
                #header("location: ../index.html");
            }
        }
        else{
            $sql = "SELECT * FROM korisnici where id=".  $id;
            $rezultat= mysqli_query($conn, $sql);
            $brojrezulta=mysqli_num_rows($rezultat);
            while($red=mysqli_fetch_assoc($rezultat)){
                $pisac= $red["pisac"];
                if($pisac==$korisnickoime && $pisac==$_SESSION["ime"]){
                    $sql = "DELETE FROM pesme WHERE id=?;";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo "greška u brisanju iz baze";
                        exit();
                    }
                    else{
                        mysqli_stmt_bind_param($stmt, "s", $id);
                        mysqli_stmt_execute($stmt);
                    }
                }
            }
        }
    }
}