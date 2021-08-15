function pomeri(){
    var email= document.getElementById("email");
    var span= document.getElementById("email-label-tekst");
    var label=document.getElementById("lemail");
    if(email.value.length==0){
        span.classList.remove("pomeri");
        label.classList.remove("pomeri-border")
    }
    else{
        span.classList.add("pomeri");
        label.classList.add("pomeri-border");
    }
}