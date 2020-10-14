<?php
session_start();
?>
  <header>
        <div class="logo">
          <img class="logo-slika" src="fajlovi/logo.png" alt="logo">
          <h1 class="logo-naziv">Moja pesma</h1>
        </div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
          <ul>
            <li><a href="index.php">Početna</a></li>
            <li onclick="dodaj()"><a href="#">Dodaj tekst</a></li>
            <li>
            <div class="dropdown">
              <button >KATEGORIJE</button>
              <div class="dropdown-content">
                <div onclick="promenikategoriju('sve')">Sve</div>
                <div onclick="promenikategoriju('ljubavne')">Ljubavne</div>
                <div onclick="promenikategoriju('decije')">Dečije</div>
                <div onclick="promenikategoriju('porodicne')">Porodične</div>
                <div onclick="promenikategoriju('zivotinje-i-priroda')">Životinje/priroda</div>
                <div onclick="promenikategoriju('rodoljubive-i-religijske')">Rodoljubive/religijske</div>
                <div onclick="promenikategoriju('ostale')">ostale</div>
              </div>
            </div>
            </li>
          </ul>  
        </nav>
        <div class="profile-container">
        <input type="checkbox" id="arrow-toggle" class="arrow-toggle">
        <label for="arrow-toggle" class="arrow-toggle-label">
          <img class="profile-icon" src="./fajlovi/profile-icon.svg" alt="profile-icon">
          <img class="arrow" src="./fajlovi/arrow.svg" alt="arrow"> 
          </label>
          <div class="dropdown-container">
          <ul>
            <?php
            if(isset($_SESSION["ime"])){
              echo '<li><a href="#">UREDI PROFIL</a></li> <li><a href="profil.php?profil='.$_SESSION["ime"].'">TVOJE PESME</a></li>
              <form id="izlogujse" method="post" action="backend/pozadinske/izloguj_se.php"><li><a onclick="izloguj_se()" href="#" class="dropdownlink">ODJAVI SE</a><li></form>';}
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
    <script>
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>