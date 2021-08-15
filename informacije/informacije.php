
        <div class="content">
            <h1 class="o-korisniku">O korisniku</h1>
            <div class="ceo-info-kontejner">
            <div class="profilna">    
                <img  src="<?php echo $profilna?>" alt="slika profilne...">
            </div>
                <div class="informacije-kontejner">
                    <h3 class="korisnicko-ime"><?php echo $ime;?></h2>
                    <h3 class="ime"><?php echo $pravoime?></h2>
                    <h3 class="prezime"><?php echo $prezime?></h2>
                </div>
            </div>
            <div class="biografija-kontejner">
                <?php
                if(!empty($biografija)){
                echo ' <h3 class="biografija">Biografija</h3>';
                echo ' <div class="biografija-box">';
                echo $biografija;
                echo '</div>';  
                }
                ?>
            </div>
        </div> 