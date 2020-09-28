<!DOCTYPE html>
<?php
session_start();
?>
<html lang="sr-RS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja pesma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="objava/objava.css">
    <link rel="stylesheet" href="izbor.css">
    <link rel="stylesheet" href="unos.css">
    <link rel="stylesheet" href="pesma-preko-celog-ekrana.css">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</head>
<body>
<?php include "nav.php" ?>
<?php
if(isset($_GET["pretraga"])){
    $profil="pretraga_stranica_prikazi_rezultate";
    $pretraga=$_GET["pretraga"];
    if(isset($_SESSION["ime"])){
        if($_SESSION["ovlascenje"]=="admin"){
            $ispis="sve";
            $ovlascenje="admin";
        }
        else{
        settype($_SESSION["godine"], int);
        if  ($_SESSION["godine"]>=18){
            $ispis="sve";
            $ovlascenje="obican";
        }
        else {
            $ispis="filter";
            $ovlascenje="obican";
        }
    }}
    else{
        $ispis="filter";
        $ovlascenje="nelogovan";
    }
}else{
    header("location: index.php");
} 
    ?>
<?php include "main.php" ?>
<?php include "foother.php" ?>
</body>
</html>