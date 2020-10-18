function dodaj(){
    document.getElementById("unos").classList.add("prikazi-unos");
}
function zatvori(){
    document.getElementById("unos").classList.remove("prikazi-unos");
}
var trenutnoaktivna=0;
function prikazivise(id){
    trenutnoaktivna=id;
    if(screen.width>=600){
        const kartica = document.getElementById(id);
        let naslov= kartica.querySelector(".naslov").textContent;
        let pisac = kartica.querySelector("a").textContent;
        let pesma=kartica.querySelector("p").textContent;
        let vreme= kartica.querySelector(".vreme-tekst").textContent;
        let lajk= kartica.querySelector(".srce");
        let slikalajka= kartica.querySelector(".srce img");
        let brojlajkova= kartica.querySelector("span").textContent;
        const kontejner = document.querySelector(".pesma-preko-celog-ekrana");
        const okvirzapesmu= kontejner.querySelector(".okvir-za-pesmu");
        const okvirzakomentare=kontejner.querySelector(".okvir-za-komentare")
        let pisac_ceo_ekran= kontejner.querySelector("#pisac-preko-celog-ekrana");
        let naslov_ceo_ekran= kontejner.querySelector("#naslov-preko-celog-ekrana");
        let pesma_ceo_ekran = kontejner.querySelector("#tekst-pesme-preko-celog-ekrana");
        let vreme_ceo_ekran = kontejner.querySelector("#vreme-preko-celog-ekrana");
        let lajk_ceo_ekran=kontejner.querySelector("#lajkuj-preko-celog-ekrana");
        let brojlajkovaceoekran = kontejner.querySelector("#brojlajkovaceoekran");
        let slikalajkaceoekran = kontejner.querySelector("#lajkuj-preko-celog-ekrana img");
        slikalajkaceoekran.setAttribute("src", slikalajka.getAttribute("src"))
        kontejner.classList.remove("mobilni");
        pisac_ceo_ekran.textContent=pisac;
        pisac_ceo_ekran.href="profil.php?profil="+pisac;
        pesma_ceo_ekran.textContent=pesma;
        naslov_ceo_ekran.textContent=naslov;
        vreme_ceo_ekran.textContent=vreme;
        brojlajkovaceoekran.textContent=brojlajkova;
        lajk_ceo_ekran.setAttribute("onclick", (lajk.getAttribute("onclick")));
        var pesmazakomentarisanje=document.getElementById("id-pesme-za-komentarisanje");
        pesmazakomentarisanje.setAttribute("value",id)
        var boje=["bela","crvena", "narandzasta", "zuta", "zelena", "plavozelena","svetloplava","tamnoplava","ljubicasta","roze","braon","dark"];
        for (i=0; i<boje.length; i++){
            okvirzapesmu.classList.remove(boje[i]);
            okvirzakomentare.classList.remove(boje[i])
        }
        klasenakartici=kartica.classList;
        nizklasanakartici=[...klasenakartici];
        for (i=0; i<boje.length; i++){
            if(nizklasanakartici.indexOf(boje[i])!=-1){
                okvirzapesmu.classList.add(boje[i]);
                okvirzakomentare.classList.add(boje[i])
            }
        }
        kontejner.classList.add("prikazi-pesmu-na-ceo-ekran")
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("komentari").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "ispiskomentara.php", false);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id="+id);
        komentari=document.getElementById("komentari");
        komentari.scrollTop=komentari.scrollHeight;
    }
    else{
        const kartica = document.getElementById(id);
        kartica.style.height="auto";
        const p = kartica.querySelector("p");
        p.style.height="auto";
        location.href = "#"+id;
        kartica.querySelector("button").style.display="none"
    }
}
function zatvori_pesmu_preko_celog_ekrana(){
    document.querySelector(".pesma-preko-celog-ekrana").classList.remove("prikazi-pesmu-na-ceo-ekran");
}
function lajkuj(id, profil){
    document.getElementById(id).querySelector("img").classList.remove("animirajsrce");
    document.getElementById("lajkuj-preko-celog-ekrana").querySelector("img").classList.remove("animirajsrce");
    var trenuta=document.getElementById(id).querySelector("img").getAttribute("src");
    setTimeout(
        function(){
            if(trenuta=="fajlovi/srce-prazno.svg"){
                var ceoekran=document.getElementById("lajkuj-preko-celog-ekrana").querySelector("img");
                var ceoekran=document.getElementById("lajkuj-preko-celog-ekrana").querySelector("img");
                document.getElementById(id).querySelector("img").src="fajlovi/srce-puno.png";
                ceoekran.src="fajlovi/srce-puno.png";
                document.getElementById(id).querySelector("img").classList.remove("animirajsrcedva");
                ceoekran.classList.remove("animirajsrcedva");
                document.getElementById(id).querySelector("img").classList.add("animirajsrce");
                ceoekran.classList.add("animirajsrce");
                var ispislajkova=document.querySelector("#lajkuj-preko-celog-ekrana span");
                var trenutanBroj=parseInt(ispislajkova.textContent);
                var novi=trenutanBroj+1;
                ispislajkova.textContent=novi;
            }
            if(trenuta=="fajlovi/srce-puno.png"){
                var ceoekran=document.getElementById("lajkuj-preko-celog-ekrana").querySelector("img");
                document.getElementById(id).querySelector("img").src="fajlovi/srce-prazno.svg";
                ceoekran.src="fajlovi/srce-prazno.svg";
                document.getElementById(id).querySelector("img").classList.remove("animirajsrce");
                ceoekran.classList.remove("animirajsrce");
                document.getElementById(id).querySelector("img").classList.add("animirajsrcedva");
                ceoekran.classList.add("animirajsrcedva");
                var ispislajkova=document.querySelector("#lajkuj-preko-celog-ekrana span");
                var trenutanBroj=parseInt(ispislajkova.textContent);
                var novi=trenutanBroj-1;
                ispislajkova.textContent=novi;
            }
        }, 100
    )
    trenutnibrojelement=document.getElementById(id+"brojlajkova"); 
    var trenutnibroj = parseInt(trenutnibrojelement.textContent);
    var novibroj = trenutnibroj++;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            trenutnibrojelement.innerHTML = this.responseText;
        }
    };
xhttp.open("POST", "backend/lajkuj.php", false);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("id="+id+"&profil="+profil);
}
function lajkujnelogovan(){
    alert("morate se ulogovati da bi mogli da lajkujete!")
}
//zatvori na esc 
document.addEventListener('keydown', function(event){
	if(event.key === "Escape"){
        zatvori();
        zatvori_pesmu_preko_celog_ekrana();
	}
});
//prikaži još na scroll je premešten u index.html i  profil.php jer zavisi...

// funkciaj za proveru da li ima psovki
var reči = ["jeb", 
"kura",
"sranj",
"govn",
"ped",
"dupe", 
"sise",
"pičk",
"pick",
"kokain",
"heroin",
"marihuana",
"prostitut",
"alko"
]
function proveri(){
    var naslov, pesma;
    naslov=document.getElementById("naslov").value;
    pesma = document.getElementById("unospesme").value;
    tekst_za_proveru= naslov+pesma;
        proveri_string(tekst_za_proveru);
        function proveri_string(string){
        for(i=0; i<reči.length; i++){
        if(string.search(reči[i])!=-1) {
            document.getElementById("pogodna").value="nije";
            break;
        }
        else{   
            document.getElementById("pogodna").value="jeste";
        }
    }}}
function proveriUnos(){
    proveri()
    var naslov=document.getElementById("naslov");
    var pesma=document.getElementById("unospesme");
    var kategorija=document.getElementById("kategorija");
    if  (naslov.value.length<2){
        return false;
    }
    else if(pesma.value.length<30){
        alert("Pesma mora imati najmanje 30 slova")
        return false;
    }
    else if(kategorija.value=="neodredjeno"){
        return false;
    }
}
// log out
function  izloguj_se(){
    form=document.getElementById("izlogujse");
    form.submit();
}
//promena boje
function promeni_boju(boja, rednibroj){
    var boje=document.getElementsByClassName("bojaizbor")
    for(i=boje.length-1; i>=0; i--){
    boje[i].classList.remove("aktivna")
    }
    boje[rednibroj].classList.add("aktivna");
    kartica=document.querySelector("#unos .kartica");
    kartica.classList.remove("crvena","bela","narandzasta","zuta","zelena","plavozelena","svetloplava","tamnoplava","ljubicasta","roze","braon","dark")
    kartica.classList.add(boja);
    textarea=document.querySelector("#unos textarea");
    textarea.classList.remove("crvena","bela","narandzasta","zuta","zelena","plavozelena","svetloplava","tamnoplava","ljubicasta","roze","braon","dark")
    textarea.classList.add(boja);
    input=document.querySelector("#unos input[type='text']");
    input.classList.remove("crvena","bela","narandzasta","zuta","zelena","plavozelena","svetloplava","tamnoplava","ljubicasta","roze","braon","dark")
    input.classList.add(boja);
    bojainput=document.getElementById("bojainput");
    bojainput.value=boja;
}
//responsiv kada se završi učitavanje
function promeni_tekst_pogodnosti(){
    var pogodnost_tekst= document.getElementById("pogodnost-tekst");
    if(screen.width<=400){
        pogodnost_tekst.textContent="Za sve uzraste?";
    }else{
        pogodnost_tekst.textContent="Ova pesma je pogodna za sve?";
    }
}
promeni_tekst_pogodnosti();
window.addEventListener("resize", promeni_tekst_pogodnosti);
//komentarisanje
var ekomentar = document.getElementById("unoskomentara");
ekomentar.addEventListener('keyup', function (e) {
    if(e.key=="Enter"){
        komentar=ekomentar.value;
        ekomentar.value="";
        autor=document.getElementById("autorkomentara").value;
        pesma=document.getElementById("id-pesme-za-komentarisanje").value;
        if(autor==""){
            alert("Morate se ulogovati da bi ste komentarisali.")
        }else if(komentar!=""){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("komentari").innerHTML = this.responseText;
                    komentari=document.getElementById("komentari");
                    komentari.scrollTop=komentari.scrollHeight;
                }
            };
            xhttp.open("POST", "backend/pozadinske/dodajkomentar.php", false);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("komentar="+komentar+"&autor="+autor+"&pesma="+pesma);
        }
    }
  });
  function komentarisimobilni(){
    komentar=ekomentar.value;
    ekomentar.value="";
    autor=document.getElementById("autorkomentara").value;
    pesma=document.getElementById("id-pesme-za-komentarisanje").value;
    if(autor==""){
        alert("Morate se ulogovati da bi ste komentarisali.")
    }else if(komentar!=""){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("komentari").innerHTML = this.responseText;
                komentari=document.getElementById("komentari");
                komentari.scrollTop=komentari.scrollHeight;
            }
        };
        xhttp.open("POST", "backend/pozadinske/dodajkomentar.php", false);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("komentar="+komentar+"&autor="+autor+"&pesma="+pesma);
    }
}
//prethodna i sledeća na strelice
function prethodna(){
    var kartice=document.querySelectorAll("#pesme .kartica");
    var idevi=[];
    for (i=0; i<kartice.length; i++){
        idevi.push(parseInt(kartice[i].getAttribute("id")));
    }
    var index=idevi.indexOf(trenutnoaktivna);
    if(index>=1){
    var indexprehodne=index-1;
    var idprethodne=idevi[indexprehodne];
    prikazivise(idprethodne);
    }
}
function sledeca(){
    var kartice=document.querySelectorAll("#pesme .kartica");
    var idevi=[];
    for (i=0; i<kartice.length; i++){
        idevi.push(parseInt(kartice[i].getAttribute("id")));
    }
    var index=idevi.indexOf(trenutnoaktivna);
    if(index%5==0){
        prikazi_jos();
    }
    var indexsledece=index+1;
    var idsledece=idevi[indexsledece];
    prikazivise(idsledece);
}
function prikazikomentare(id){
    if(screen.width<=600){
        console.log("manje od 600")
        trenutnoaktivna=id;
        const kartica = document.getElementById(id);
        let vreme= kartica.querySelector(".vreme-tekst").textContent;
        let lajk= kartica.querySelector(".srce");
        let slikalajka= kartica.querySelector(".srce img");
        let brojlajkova= kartica.querySelector("span").textContent;
        const kontejner = document.querySelector(".pesma-preko-celog-ekrana");
        kontejner.classList.add("mobilni");
        const okvirzakomentare=kontejner.querySelector(".okvir-za-komentare")
        const okvirzapesmu= kontejner.querySelector(".okvir-za-pesmu")
        let vreme_ceo_ekran = kontejner.querySelector("#vreme-preko-celog-ekrana");
        let lajk_ceo_ekran=kontejner.querySelector("#lajkuj-preko-celog-ekrana");
        let brojlajkovaceoekran = kontejner.querySelector("#brojlajkovaceoekran");
        let slikalajkaceoekran = kontejner.querySelector("#lajkuj-preko-celog-ekrana img");
        slikalajkaceoekran.setAttribute("src", slikalajka.getAttribute("src"))
        vreme_ceo_ekran.textContent=vreme;
        brojlajkovaceoekran.textContent=brojlajkova;
        lajk_ceo_ekran.setAttribute("onclick", (lajk.getAttribute("onclick")));
        var pesmazakomentarisanje=document.getElementById("id-pesme-za-komentarisanje");
        pesmazakomentarisanje.setAttribute("value",id)
        var boje=["bela","crvena", "narandzasta", "zuta", "zelena", "plavozelena","svetloplava","tamnoplava","ljubicasta","roze","braon","dark"];
        for (i=0; i<boje.length; i++){
            okvirzapesmu.classList.remove(boje[i]);
            okvirzakomentare.classList.remove(boje[i])
        }
        klasenakartici=kartica.classList;
        nizklasanakartici=[...klasenakartici];
        for (i=0; i<boje.length; i++){
            if(nizklasanakartici.indexOf(boje[i])!=-1){
                okvirzapesmu.classList.add(boje[i]);
                okvirzakomentare.classList.add(boje[i])
            }
        }
        kontejner.classList.add("prikazi-pesmu-na-ceo-ekran")
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("komentari").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "ispiskomentara.php", false);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id="+id);
        komentari=document.getElementById("komentari");
        komentari.scrollTop=komentari.scrollHeight;}
    else{
        prikazivise(id);
        document.querySelector(".pesma-preko-celog-ekrana").classList.remove("mobilni");
    }
}
function  prikazi_vise_ceo_ekran(){
    var kartica=document.querySelector("#pesme .kartica");
    id=kartica.getAttribute("id")
    prikazivise(id);
}