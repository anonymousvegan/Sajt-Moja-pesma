<?php
session_start();
if(isset($_POST["unosdugme"])){
    if(isset($_SESSION["ime"])==0){
        header("location: ../../index.php?greska=neulogovan");
        exit();
    }else{
    require "vezasabazom.php";
    $pisac = $_POST["pisac"];
    if($pisac!=$_SESSION["ime"]){
        if(isset($_SESSION["ime"])==0){
            header("location: ../../index.php?greska=greskasasesijom");
            exit();
        } 
    }
    else if($_POST["kategorija"]=="neodređeno"){
        header("location: ../../index.php?greska=greskasasesijom");
        exit();
    }
    else{
    $naslov = $_POST["naslov"];
    $pesma= $_POST["pesma"];
    $vreme = date("U");
    $kategorija = $_POST["kategorija"];
    $pogodna= $_POST["pogodna"];
    $boja = $_POST["boja"];
    $sql = "INSERT INTO pesme (pisac, naslov, pesma, pogodna, vreme, kategorija, boja) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt= mysqli_stmt_init($conn); 
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "greška 1";
        exit();
    }   
    else{
        mysqli_stmt_bind_param($stmt, "sssssss", $pisac, $naslov, $pesma, $pogodna, $vreme, $kategorija, $boja);
        mysqli_stmt_execute($stmt);
        header("location: ../../index.php?uspeh=pesmaobjavljena");
    } 
}}}
else{
    echo 'mislimo da nemate pristup ovoj stranici, vratite se na <a href="../../index.php">početnu stranicu</a>';
}