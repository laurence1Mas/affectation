var message_valeur=document.querySelector(".information").children[1];
var idinscription;
var valeur;
window.onload=()=>{
    valeur="aucune valeur";
    message_valeur.innerHTML=valeur;
    
}
var qr= new QRious({
    Element:document.querySelector(".qrious",size,250,value,valeur)
})
function change(params){
    switch (params.idinscription) {
        case "idinscription  ":
            idinscription=params.value
            break;
    }
    valeur=idinscription ;
    qr.value=valeur ;
    message_valeur.innerHTML=qr.value;
}