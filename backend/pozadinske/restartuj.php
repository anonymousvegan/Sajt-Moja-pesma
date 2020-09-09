<?php
if (isset($_POST["restartuj-dugme"])){
    $selektor = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "https://tenfold-sundays.000webhostapp.com/pesme/forme/unesite-novu-lozinku.php?selektor=" . $selektor . "&validator=".bin2hex($token);
    $vreme = date("U")+1800;
    require "vezasabazom.php";
    $email= $_POST["email"];
    $sql = "DELETE FROM passwordrestart WHERE email=?";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "došlo je do greške u bazi podataka";
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }
    $sql="INSERT INTO passwordrestart (email, selektor, token, vreme) VALUES (?, ?, ?, ?);";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "došlo je do grešek u bazi podataka";
        exit();
    }
    else{
        $enkriptoovantoken= password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $email, $selektor, $enkriptoovantoken, $vreme);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    $to = $email;
    $subject ='Restartujte šifru za pesme.com';
    $message='<p>zatražili ste novu lozinku za pesme.com?
    kliknite na link ispod da bi ste restartovali lozinku, ukoliko 
    to niste bili vi, ignorišite ovaj email</p>';
    $message .="<p>ovo je link za restartovanje šifre </p>";
    $message .='<a href="' . $url . '">' . $url . '</a>';
    $hendlers ="From: nikola <neki@email.com>\r\n";
    $hendlers .="Replay-To: neki@email.com\r\n";
    $hendlers .="Content-type: text/html\r\n";
    mail($to, $subject, $message, $hendlers);
    header("location: ../../forme/zaboravio-sam-lozinku.php?restart=uspesan");
}
else{
    header("location: ../../forme/prijava/prijava.php");
}