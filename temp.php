function dodaj(){
    document.getElementById("unos").classList.add("prikazi-unos");
}
function zatvori(){
    document.getElementById("unos").classList.remove("prikazi-unos");
}
function prikazivise(id){
    if(screen.width>=600){
    const kartica = document.getElementById(id);
    let naslov= kartica.querySelector(".naslov").textContent;
    let pisac = kartica.querySelector("a").textContent;
    let pesma=kartica.querySelector("p").textContent;
    let vreme= kartica.querySelector(".vreme").textContent;
    const kontejner = document.querySelector(".pesma-preko-celog-ekrana");
    let pisac_ceo_ekran= kontejner.querySelector("#pisac-preko-celog-ekrana");
    let naslov_ceo_ekran= kontejner.querySelector("#naslov-preko-celog-ekrana");
    let pesma_ceo_ekran = kontejner.querySelector("#tekst-pesme-preko-celog-ekrana");
    pisac_ceo_ekran.textContent=pisac;
    pisac_ceo_ekran.href="profil.php?profil="+pisac;
    pesma_ceo_ekran.textContent=pesma;
    naslov_ceo_ekran.textContent=naslov;
    klase=kartica.classList;
    klaseniz=[...klase];
    boje=["bela","crvena", "narandzasta", "zuta", "zelena", "plavozelena","svetloplava","tamnoplava","ljubicasta","roze","braon","dark"];
    for(i=0; i<boje.length; i++){
        if(klaseniz.indexOf(boje[i]!=-1)){
        klase.remove(boje[i])
        console.log("izbrisao sam klasu:", boje[i]);
        }
    }
}else{
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
    var trenuta=document.getElementById(id).querySelector("img").getAttribute("src");
    setTimeout(
        function(){
            if(trenuta=="fajlovi/srce-prazno.svg"){
                document.getElementById(id).querySelector("img").src="fajlovi/srce-puno.png";
                document.getElementById(id).querySelector("img").classList.remove("animirajsrcedva");
                document.getElementById(id).querySelector("img").classList.add("animirajsrce");
    
            }
            if(trenuta=="fajlovi/srce-puno.png"){
                document.getElementById(id).querySelector("img").src="fajlovi/srce-prazno.svg";
                document.getElementById(id).querySelector("img").classList.remove("animirajsrce");
                document.getElementById(id).querySelector("img").classList.add("animirajsrcedva");
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
    console.log("radi");
    var naslov, pesma;
    naslov=document.getElementById("naslov").value;
    pesma = document.getElementById("unospesme").value;
    tekst_za_proveru= naslov+pesma;
    console.log(tekst_za_proveru)
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
        console.log(pesma.value.length)
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
        pogodnost_tekst.textContent="za sve uzraste?";
    }else{
        pogodnost_tekst.textContent="ova pesma je pogodna za sve?";
    }
}
promeni_tekst_pogodnosti();
window.addEventListener("resize", promeni_tekst_pogodnosti)