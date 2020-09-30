<?php
session_start();
?>
  <header>
        <div class="logo">
          <img class="logo-slika" src="fajlovi/logo.jpg" alt="logo">
          <h1 class="logo-naziv">Moja pesma</h1>
        </div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
          <ul>
            <li><a href="index.php">Početna</a></li>
            <li  onclick="dodaj()"><a href="#">Dodaj tekst</a></li>
          </ul>  
        </nav>
        <div class="profile-container">
          <img class="profile-icon" src="./fajlovi/profile-icon.svg" alt="profile-icon">
          <input type="checkbox" id="arrow-toggle" class="arrow-toggle">
          <label for="arrow-toggle" class="arrow-toggle-label">
            <img class="arrow" src="./fajlovi/arrow.svg" alt="arrow"> 
          </label>
          <div class="dropdown-container">
          <ul>
            <?php
            if(isset($_SESSION["ime"])){
              echo '<li><a href="#">UREDI PROFIL</a></li> <li><a href="#">TVOJE PESME</a></li>';}
            else{
              echo '<li><a href="forme/prijava.php">PRIJAVI SE</a></li> <li><a href="forme/registracija.php">REGISTRUJ SE</a></li>';
            }
            ?>
          </ul>
          </div>
        </div>
        <label for="nav-toggle" class="nav-toggle-label">
          <span></span>
        </label>
    </header>