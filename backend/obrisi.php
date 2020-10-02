<?php
$id = $_POST["idpesme"];
echo $id;
require "pozadinske/vezasabazom.php";
$sql ="DELETE FROM pesme WHERE id=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "greška u brisanju iz baze";
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
    }