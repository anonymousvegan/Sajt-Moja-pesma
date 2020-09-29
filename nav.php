
    <header>
        <h1 class="logo">Moja pesma</h1>
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
            <li><a href="#">UREDI PROFIL</a></li>
            <li><a href="#">TVOJE PESME</a></li>
          </ul>
          </div>
        </div>
        <label for="nav-toggle" class="nav-toggle-label">
          <span></span>
        </label>
    </header>