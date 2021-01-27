<?php
$servername="server127";
$dBUsername="mojatqni_anonymousvegan";
$dBPassword="p@R00t Os";
$dBName="mojatqni_mojapesma";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("došlo je do greške:".mysqli_connect_error());
}
