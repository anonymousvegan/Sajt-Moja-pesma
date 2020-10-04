<form onsubmit="return proveriUnos()" class="form-container" autocomplete="off" method="post" action="backend/pozadinske/unospesme.php">
<input type="hidden" name="pisac" value="<?php echo $_SESSION['ime'];?>">
<div class="form-group">
                <input onkeyup="proveri()" type="text"  placeholder=" " class="form-control" name="naslov" id="naslov" aria-describedby="emailHelp" autocomplete="off" required >
                <label for="naslov" id="lnaslov">
                <span class="label-tekst" id="username-label-tekst">naslov</span></label>
            </div>
            <div class="okvir-za-unos-pesme">
                <textarea require minlength="30" onkeyup="proveri()" id="unospesme" name="pesma" placeholder="Tekst pesme"></textarea>
            </div>
            <div class="form-group">
            <select name="kategorija" id="kategorija">
                <option value="neodredjeno">Odaberite Kategodiju</option>
                <option value="ljubavne">Ljubavne</option>
                <option value="decije">Dečije</option>
                <option value="porodicne">Porodične</option>
                <option value="zivotinje-i-priroda">Životinje i priroda</option>
                <option value="rodoljubive-i-religijske">Rodoljubive/Religijske</option>
                <option value="ostale">Ostale</option>
            </select>
            </div>
            <div class="pogodnost">
                <div class="pogodnost-tekst">Ova pesma je pogodna za sve?</div>
                <div class="pogodnost-odabir">
                    <select name="pogodna" id="pogodna">
                        <option value="jeste">Da</option>
                        <option value="nije">Ne</option>
                </select>
                </div>
            </div>
