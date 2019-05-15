document.getElementById("button").addEventListener("click",function(){ // va chercher dans le document l'élément avec l'id = "" lorsque l'on clique dessus:
document.querySelector(".text").remove();


var oldDivElt = document.getElementById("newDialog");// créé une variable en reprenant l'élément qui a la classe ""
var newDivElt = document.createElement("div");// créé une variable et lui donne la forme d'une div
newDivElt.id = "newDialog";// Donne l id a la variable div
newDivElt.textContent = "<p> À votre table, vous essayez d'élaborer un plan d'action, mais à force de vous agacer et de grommeler vous laissez échapper votre épée, qui tombe au sol.</p>"; 
document.getElementById("test").replaceChild(newDivElt, oldDivElt);// va chercher dans le document le conteneur identifié, et remplace son contenu 
});