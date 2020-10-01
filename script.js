function dodaj(){
    document.getElementById("unos").classList.add("prikazi-unos");
}
function zatvori(){
    document.getElementById("unos").classList.remove("prikazi-unos");
}
function prikazivise(id){
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
    kontejner.classList.add("prikazi-pesmu-na-ceo-ekran");
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
function proveri(s){
    var naslov, pesma;
    naslov=document.getElementById("naslov").value;
    pesma = document.getElementById("unospesme").value;
    if(s=="n"){
        proveri_string(naslov.toLowerCase())
    }
    else if(s=="p"){
        proveri_string(pesma.toLowerCase());
    }
    function proveri_string(string) {
        for(i=0; i<reči.length; i++){
        if(string.search(reči[i])!=-1) {
            document.getElementById("pogodna").value="nije";
            break;
        }
        else{   
            document.getElementById("pogodna").value="jeste";
        }
    }}
}
//proveri unos na submit
function proveriUnos(){
    proveri("n");
    proveri("p");
    var pesma
}