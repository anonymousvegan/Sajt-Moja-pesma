<div class="kontejner">
<div class="pretraga">
        <form class="form-container" autocomplete="off" method="post" action="backend/pozadinske/pretrazi.php">
            <div class="form-group">
                <input type="text"  placeholder=" " class="form-control" name="pretraga" id="pretraga" aria-describedby="emailHelp" autocomplete="off" required >
                <label for="pretraga" id="lpretraga">
                <span class="label-tekst" id="pretraga-label-tekst">Pretraži...</span></label>
                <img src="fajlovi/pretraga.webp" alt="">
            </div>  
        </form>
    </div>
    <div class="odabir odabrano " id="grid" onclick="grid()">
        <img src="fajlovi/grid.png" alt="grid">
    </div>
    <div class="odabir"  id="lista" onclick="lista()" >
        <img src="fajlovi/lista.svg" alt="lista">
    </div>
</div>
<script>
function lista(){
    document.getElementById('pesme').classList.add('lista');
    document.getElementById('grid').classList.remove("odabrano");
    document.getElementById('lista').classList.add("odabrano");
}    
function grid(){
    document.getElementById('pesme').classList.remove('lista');
    document.getElementById('grid').classList.add("odabrano");
    document.getElementById('lista').classList.remove("odabrano");
}   
</script>