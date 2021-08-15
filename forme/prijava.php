<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moja pesma</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <script data-ad-client="ca-pub-7058729872957014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <link rel="icon" href="../fajlovi/logo.png">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
        <script src="script.js" defer></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="col-md-6 col-sm-9 col-xs-12" id="kolona">
            <form class="form-container" autocomplete="off" method="post" action="../backend/pozadinske/uloguj_se.php">
                <h1>Prijavi se</h1>
            <?php
                if(isset($_GET["greska"])){
                    echo '<p class="greska">';
                    if($_GET["greska"]=="prazno_polje"){
                        echo "morate popuniti sva polja!</p>";
                    }
                    else if($_GET["greska"]=="sql_greska"){
                        echo "greska sa bazom podataka </p>";
                    }
                    else if($_GET["greska"]=="nema_korisnika"){
                        echo "Korisnik ne postoji! ";
                        echo "Ukoliko ste novi, ";
                        echo '<a href="registracija.php">Registrujte se</a></p>';
                    }
                    else if($_GET["greska"]=="netacna_lozinka"){
                        echo "Uneli ste pogrešnu lozinku ";
                        echo "možete zatražiti novu lozinku klikom na";
                        echo '<a href="zaboravio-sam-lozinku.php"> zaboravio sam lozinku</a></p>';
                    }
                    else if($_GET["greska"]=="nepoznata"){
                    echo "Došlo je do nepoznate greške!</p>";
                    }
                }
            ?>
                <div class="form-group">
                    <input type="text" placeholder=" " onkeyup="pomeri()" class="form-control" name="username" id="email" aria-describedby="emailHelp" autocomplete="off" required autofocus >
                    <label for="email" id="lemail">
                    <span class="label-tekst" id="email-label-tekst">Korisničko ime ili E-mail adresa</span></label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder=" " class="form-control" autocomplete="off" id="exampleInputPassword1" required>
                    <label for="exampleInputPassword1" id="llozinka"><span class="label-tekst">Lozinka</span></label>
                </div>
                    <div id="sacuvaj-kontejner">
                        <input type="checkbox" name="sacuvaj" id="sacuvaj">
                        <label for="sacuvaj">Ostani prijavljen</label>
                    </div>
                <button type="submit" name="login" class="btn btn-primary btn-block">Prijavi se</button>
                <a style="display: inline-block; position: relative; top: 10px;" href="zaboravio-sam-lozinku.php">zaboravili ste lozinku? </a>
            </form>
        </div>
    </body>
</html>