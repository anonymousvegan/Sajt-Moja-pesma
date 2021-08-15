<?php
$id= $_POST["id"];
$prijava= $_POST["tekst-prijave"];
$unos = "id : ". $id. "\n prijava: ". $prijava . "\n \n "; 
$f=fopen("../../prijave.txt", "a");
fwrite($f, $unos);
fclose($f);
header("location: ../../index.php");