<?php
if(isset($_POST["unosdugme"])){ 
    require "vezasabazom.php";
    $pisac = $_POST["pisac"];
    $naslov = $_POST["naslov"];
    $pesma= $_POST["pesma"];
    $vreme = date("U");
    $kategorija = $_POST["kategorija"];
    $pogodna= $_POST["pogodna"];
    $sql = "INSERT INTO pesme (pisac, naslov, pesma, pogodna, vreme, kategorija) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt= mysqli_stmt_init($conn); 
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "greška 1";
        exit();
    }   
    else{
        mysqli_stmt_bind_param($stmt, "ssssss", $pisac, $naslov, $pesma, $pogodna, $vreme, $kategorija);
        mysqli_stmt_execute($stmt);
        echo "uspesno ste dodali pesmu";
    } 
}
else{
    echo 'mislimo da nemate pristup ovoj stranici, vratite se na <a href="../../index.php">početnu stranicu</a>';
}