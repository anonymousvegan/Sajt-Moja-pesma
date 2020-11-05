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
        <link rel="stylesheet" href="uredi.css">
        <link rel="stylesheet" href="unos.css">
        <link rel="stylesheet" href="pesma-preko-celog-ekrana.css">
        <link rel="icon" href="fajlovi/logo.png">
        <script data-ad-client="ca-pub-7058729872957014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- ovo su moje custom skripte -->
        <script src="script/filter.js" defer></script>
        <script src="script/logout.js" defer></script>
        <script src="script/prethodna-sledeca.js" defer></script>
        <script src="script/prikazivise.js" defer></script>
        <script src="script/promeniboju.js" defer></script>
        <script src="script/script-za-uredi.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php 
            include "nav.php";
            include "unos.php";
            if(isset($_SESSION["ime"])){
                require "uredi.php";
            }else{
                echo "<p>Treba da se prijavite kako bi videli ovu stranicu..... </p>";
                echo "<p>Ukoliko ste ovde prvi put i nemate nalog kliknite na <a href='forme/registracija.php'>REGISTRUJ SE </a></p>";
                echo "<p>Ukoliko već imate nalog kliknite na  <a href='forme/prijava.php'>PRIJAVI SE </a></p>";
            }
        ?>
    </body>
</html>