<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moja pesma</title>
        <script data-ad-client="ca-pub-7058729872957014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <link rel="icon" href="../fajlovi/logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
        <script src="script.js" defer></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="col-md-6 col-sm-9 col-xs-12" id="kolona">
            <form class="form-container" autocomplete="off" method="post" action="../backend/pozadinske/registruj_se.php">
                <h1>Registruj se</h1>
                <?php
                    if(isset($_GET["greska"])){
                        if($_GET["greska"]=="prazno_polje"){
                            echo '<p class="greska">';
                            echo "Morate popuniti sva polja!</p>";
                        }
                        else if($_GET["greska"]=="sql_greska"){
                            echo '<p class="greska">';
                            echo "greska sa bazom podataka </p>";
                        }
                        else if($_GET["greska"]=="neispravno_ime"){
                            echo '<p class="greska">';
                            echo "Ime ne sme da sadrži specijalne znakove ili razmake</p>";
                        }
                        else if($_GET["greska"]=="ime_zauzeto"){
                            echo "<p class='greska'>To ime je već zauzeto, unesite drugo <br>";
                            echo "ukoliko već imate nalog";
                            echo "<a href='prijava.php'> prijavite se </a></p>";
                        }
                        else if($_GET["greska"]=="email_zauzet"){
                            echo "<p class='greska'>Već ste se registrovali, <br>";
                            echo "<a href='prijava.php'> prijavite se</a>, ili ";
                            echo 'ako ste zaboravili lozinku-<a href="zaboravio-sam-lozinku.php">kliknite ovde</a></p>';
                        }
                    }
                    if(isset($_GET["uspesno"])){
                        echo ' <p  class="uspesno">Čestitamo, uspešno ste se regisrovali, sada se možete <a href="prijava.php">prijaviti</a></p>';
                    }
                ?>
                <div class="form-group">
                    <input type="text"  placeholder=" " class="form-control" name="username" id="username" aria-describedby="emailHelp" autocomplete="off" required >
                    <label for="username" id="lusername">
                    <span class="label-tekst" id="username-label-tekst">Korisničko ime</span></label>
                </div>
                <div class="form-group">
                    <input type="email"  placeholder=" " onkeyup="pomeri()" class="form-control" name="email" id="email" aria-describedby="emailHelp" autocomplete="off" required >
                    <label for="email" id="lemail">
                    <span class="label-tekst" id="email-label-tekst">E-mail adresa</span></label>
                </div>
                <div class="form-group">
                    <input type="number" min="4" max="120" class="form-control" placeholder=" " name="godine" id="godine" aria-describedby="emailHelp" autocomplete="off" required >
                    <label for="godine" id="lgodine">
                    <span class="label-tekst" id="godine-label-tekst">Koliko imate godina?</span></label>
                </div>
                <div class="form-group">
                    <input type="password"  placeholder=" " name="password" class="form-control" autocomplete="off" id="password" required>
                    <label for="password" id="llozinka"><span class="label-tekst">Lozinka</span></label>
                </div>
                <button type="submit" name="registracija-dugme" class="btn btn-primary btn-block">Registruj se</button>
            </form>
        </div>
    </body>
</html>