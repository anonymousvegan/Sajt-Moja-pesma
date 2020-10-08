<?php  
    if(isset($id)){
        $sql="SELECT komentari FROM pesme WHERE id=".$id;
        $rezultat= mysqli_query($conn, $sql);
        $brojrezulta=mysqli_num_rows($rezultat);
        while($red=mysqli_fetch_assoc($rezultat)){
            echo $red["komentari"];
        }
    }
    else {
        $id =  $_POST["id"];
        require "backend/pozadinske/vezasabazom.php";
        $sql="SELECT komentari FROM pesme WHERE id=".$id;
        $rezultat = mysqli_query($conn, $sql);
        $brojrezulta=mysqli_num_rows($rezultat);
        while($red=mysqli_fetch_assoc($rezultat)){
            echo $red["komentari"];
        }
}
?> 