<div class="pesma-preko-celog-ekrana">
    <div class="okvir-za-pesmu">
        <div class="pisac">
            <a href="profil.php?profil=anonymousvegan" id="pisac-preko-celog-ekrana">anonymousvegan</a>
        </div>
        <h1 id="naslov-preko-celog-ekrana">Krvava bajka</h1>
        <p id="tekst-pesme-preko-celog-ekrana"></p>
    </div>
    <div class="okvir-za-komentare">
        <form method="post" action="dodajkomentar.php" class="form-komentar">
            <input type="text" name="komentar" id="komentar" placeholder=" " autocomplete="off"/>
            <label for="komentar" id="lkomentar">
                <span class="label-tekst" id="komentar-label-tekst">Unesi komentar...</span>
            </label>
            <button type="submit">komentarisi</button>
        </form>
    </div>
    <div class="x" onclick="zatvori_pesmu_preko_celog_ekrana()">&times;</div>
</div>