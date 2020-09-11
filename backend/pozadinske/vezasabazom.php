<?php
$servername="localhost";
$dBUsername="sara";
$dBPassword="SHkola.debLinux20.04";
$dBName="login";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("došlo je do greške:".mysqli_connect_error());
}