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
    setTimeout(
        function(){
            document.getElementById(id).querySelector("img").classList.add("animirajsrce");
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
//prikaži još na scroll
broj=5
function prikazi_jos(){
    broj+=5;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pesme").innerHTML = this.responseText;
}
};
xhttp.open("POST", "objava/prikazi_jos.php", false);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("broj="+broj);
}
$(window).scroll(function() {
if($(window).scrollTop() + window.innerHeight >= $(document).height()-100) {
    console.log($(window).scrollTop() , window.innerHeight ,$(document).height())
    prikazi_jos()
}
});