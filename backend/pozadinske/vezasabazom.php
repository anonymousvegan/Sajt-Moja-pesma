<?php
$servername="localhost";
$dBUsername="root";
$dBPassword="SHkola.debLinux20.4";
$dBName="mojatqni_mojapesma";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("došlo je do greške:".mysqli_connect_error());
}
